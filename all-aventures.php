<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-adventures</title>
    <link rel="stylesheet" href="indext.css">
</head>

<body>
    <div class="ajout">

        <?php
        session_start();

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

        // recuperation des donnees dans BD
        $sql = "SELECT * FROM `aventures`";
        /* execution
        echo "<html>  <h1>Upcoming Adventures</h1> </html>" . "<br/> ";
        $requete = mysqli_query($conn, $sql);
        if (mysqli_num_rows($requete) > 0) {
            while ($rows = mysqli_fetch_assoc($requete)) {

                //echo "$rows[ID]"  . "<br/> ";
                echo "<html>  <h1>$rows[Heading]  </h1> </html>
            
            ";

                echo "$rows[TripDate]" . "<br/> " . "<br/>";
                echo "$rows[Duration]" . "<br/>";
                echo "<html>  <h1>Summary</h1> </html>";
                echo "$rows[Summary]" . "<br/>";
            }
        }
*/

        ?>
    </div>


    <!-- ajout de la page principale -->

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
                    <li><a href="Login.php">Login</a></li>
                </ul>

            </li>
        </ul>
    </nav>

    </header>
    <main class="main">
        <div class="fond">
            <div class="experience">
                <h1>Come Expirence to Canada<h1>
            </div>
            <a href="#"><img src="canoe1.jpg" alt=""></a>
        </div>
        <div class="title-adventures">
            <h2>Upcoming Adventures</h2>
        </div>
        <div class="Adventures">
            <h2><a href="halifax.html">Halifax</a></h2>

            <p>12 December 2022 <br> <br> 23 December 2022 <br> <br> Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Quia ea praesentium possimus commodi vel animi accusantium ipsam, sit, tempora corrupti
                exercitationem, distinctio saepe! Expedita est deserunt eaque nam cumque atque.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum assumenda eum quas incidunt laboriosam
                porro voluptatem eaque eveniet sunt? Nesciunt quos odio illo expedita totam! Necessitatibus repellat
                porro eveniet fugit. <br>
            </p>
            <h3><a href="#">Summary</a></h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos iusto qui libero eius cum vel sunt facere
                doloremque fugiat. Porro fuga mollitia quos laboriosam illo. Iusto reprehenderit ipsa ratione.
            </p>


            <h2><a href="Sydney.html">Sydney</a></h2>
            <p>09 October 2022 <br> <br> 23 October 2022 <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ipsum assumenda eum quas incidunt laboriosam porro voluptatem eaque eveniet sunt? Nesciunt quos
                odio illo expedita totam! Necessitatibus repellat porro eveniet fugit. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur magnam mollitia provident
                voluptatem hic voluptatibus iusto dolore atque quisquam necessitatibus ut vitae officiis deserunt quod
                architecto, et nihil, dicta quaerat?
            </p>
            <h3><a href="#">Summary</a></h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos iusto qui libero eius cum vel sunt facere
                doloremque fugiat. Porro fuga mollitia quos laboriosam illo. Iusto reprehenderit ipsa ratione
                recusandae.
            </p>


            <?php
            // execution du code php dans mon html
            echo "<html>  <h1 class='nadd'>New Adventures</h1> </html>" . "<br/> ";
            $requete = mysqli_query($conn, $sql);
            if (mysqli_num_rows($requete) > 0) {
                while ($rows = mysqli_fetch_assoc($requete)) {

                    //echo "$rows[ID]"  . "<br/> ";
                    echo "<html>  <h1 class= 'hed'>$rows[Heading]  </h1> </html>";
                    echo "$rows[TripDate]" . "<br/> " . "<br/>";
                    echo "$rows[Duration]" . "<br/>";
                    echo "<html>  <h3>Summary</h3> </html>";
                    echo "$rows[Summary]" . "<br/>";
                }
            }
            ?>
        </div>

    </main>
    <footer>
        <div class="logoR">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-049bd299-2192-403c-aa9b-8b8e62d63e6a"></div>
        </div>
    </footer>

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

    <style>
        .hed {
            color: blue;
        }

        .nadd {
            color: brown;
        }
    </style>

</body>

</html>