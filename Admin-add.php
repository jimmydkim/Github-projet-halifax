<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indext.css">
    <title>Admin-add.php</title>

</head>

<body>
    <?php
    session_start();
    // on protege la page des utilisateurs non connectes
    if (!isset($_SESSION['mdp'])) {
        header("location:Login.php");
        exit;
    }


    // Créer une conexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "addaventures";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // verifier la connexion
    if ($conn->connect_error) {
        die(" connexion failed: " . $conn->connect_error);
    }

    //  vérifier si la variable $_POST['Bouton'] est bien définie et ces valeurs


    if (isset($_POST['button'])) {
        /*  $Heading = $_POST['Heading'];
        $date = $_POST['date'];
        $Duration = $_POST['Duration'];
        $message = $_POST['message']; */
    }
    // Requête d'insertion

    $sql = "INSERT INTO `aventures` (`Heading`,`TripDate`,`Duration`,`Summary`)VALUES('$_POST[Heading]',
    '$_POST[date]' , '$_POST[Duration]', '$_POST[message]')";





    // Requête suite se trouve dans la en bas de la form */
    ?>
    <!--Insertion du code de l'entete*-->
    <header>
        <nav>
            <h1 class="titre1">Halifax Canoe and Kayak</h1>
            <div class="icone">
                <div class="hambur"><img src="/hamburger2.png" alt=""></div>
                <div id="paddle"><img src="/paddle-white2.png" alt=""></div>
            </div>
            <ul class="navMenu">
                <div class="close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
                    </svg>
                </div>
                <li class="menu-home"><a href="index.html">Home</a>
                    <ul class="sous-menu">
                        <li><a href="#">Welcome</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li>
                <li class="menu-book"><a href="Formulaire.html">Book Trip</a>
                    <ul class="sous-menu">
                        <li><a href="halifax.html">Halifax</a></li>
                        <li><a href="Sydney.html">Sydney</a></li>
                        <li><a href="montreal.html">Montreal</a></li>
                        <li><a href="others.html">Others</a></li>
                    </ul>
                </li>
                <li class="Login"><a href="Admin-add.php">Admin Login</a>
                    <ul class="sous-menu">
                        <?php if (!isset(($_SESSION['mdp']))) : ?>
                            <li><a href="Login.php">Login</a></li>

                        <?php else : ?>
                            <li><a href="deconnexion.php">Deconnect</a></li>
                        <?php endif;
                        echo "Connextion data base"; ?>
                    </ul>

                </li>
            </ul>
        </nav>

    </header>

    <div id="admin">
        <?php if (isset(($_SESSION['mdp']))) : ?>
            <h2>Welcome : <?= $_SESSION['mail']  ?> you are connected</h2>
        <?php endif; ?>

        <H1>ADMIN-ADD ADVENTURES</H1>
        <br />
        <br />
        <form action="" method="post">
            <label for="Heading">
                Heading <br />
            </label>
            <input type="text" name="Heading" id="Heading"> <br />

            <label for="date">
                Trip Date <br />
            </label>
            <input type="date" name="date"> <br />

            <label for="Duration">
                Duration <br />
            </label>
            <input type="text" name="Duration" id="Duration"> <br />


            <label for="Summary">
                Summary <br />
            </label>
            <textarea name="message" id="message" rows="20" cols="70"></textarea> <br />
            </label>

            <input type="submit" value="submit" name="button" id="button" />
        </form> <br />

        <?php
        // Suite de la requete d'insertion
        if ($conn->query($sql) === TRUE) {
            $echo = 'added sucesfully';
            header("location: admin-comfirm.php");
        } else {
            echo  "Some lines are not filled " . "<br/>"
                . $conn->error;
        }
        $conn->close();

        ?>
    </div>

    <!--Insertion du code CSS *-->
    <style>
        #admin {
            font-size: 18px;
            max-width: 560px;
            border: 2px solid red;
            margin: 2px auto;
            background-color: rgb(127, 146, 120);
            padding-top: 120px;
            height: 730px;
            display: block;
        }

        h2 {
            color: blue;
        }
    </style>

    <!--Insertion du code de l'entete jquery*-->

    <script src="jquery-3.6.1.js"> </script>
    <script>
        $(document).ready(function() {
            $(".hambur").click(function() {
                $(".navMenu").toggle();
            });
            $('.close').click(function() {
                $(".navMenu").hide();
            });
        });
    </script>

</body>

</html>