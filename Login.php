<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- Formulaire html -->
    <section>

        <h1>Administrator Login</h1>

        <form method="post">


            <label for="">Mail address</label>
            <input type="text" name="mail">

            <label for="">password</label>
            <input type="password" name="mdp">
            <input type="submit" name="Connect">

        </form>
        <!-- CSS -->

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;

            }

            body {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background-color: #16f;
            }

            section {
                background-color: #fff;
                padding: 10px;
                display: flex;
                flex-direction: column;
                width: 420px;
            }

            section h1 {
                text-align: center;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            form input {
                margin: 5px 0;
                padding: 5px 5px;
                outline: 0;
                border: 2px solid#000;
                border-radius: 6px;
                margin-bottom: 16px;
            }

            echo {
                color: red;
                text-align: center;
            }
        </style>
    </section>


    <?php
    session_start();
    // on verifie si  mail et mdp ne sont pas vide
    if (isset($_POST["Connect"])) {
        if (!empty($_POST['mail']) and !empty($_POST['mdp'])) {
            // on verifie si c'est un mail

            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                die("it's not an email address");
            }
            // on se connect a la bdd
            $dsn = 'mysql:dbname=login;host=127.0.0.1';
            $user = 'root';
            $password = '';
            $mail = htmlspecialchars($_POST['mail']);
            $mdpa = $_POST['mdp'];

            $bdd = new PDO($dsn, $user, $password);

            // connect session
            $req = $bdd->prepare("SELECT * FROM adminlog WHERE email= ? and mdp = ? ");
            $req->execute(array($mail, $mdpa));
            if ($req->rowCount() > 0) {

                $_SESSION['mail'] = $mail;
                $_SESSION['mdp'] = $mdpa;
                $_SESSION['ID'] =  $req->fetch()['ID'];
                // redirige vers une autre page
                header("location: Admin-add.php");
            } else {
                echo " incorrect password or email adress!   ";
            }
        } else {
            echo " fill the blank fields";
        }
    }
    ?>


</body>

</html>