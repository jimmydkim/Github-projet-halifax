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


    <!--partie Admin-comfirm-->
    <div class="comfir">
        <H1>Admin - Comfirm</H1> <br>
    </div>
    <?php
    session_start();
    echo "<html>  <h3>Data has add successfully to DB</h3> </html>";
    echo "<html>  <h2 ><a href='all-aventures.php'>View All Adventures</a></h2> </html>";

    ?>
    <!-- CSS-->
    <style>
        .comfir {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50vh;

        }

        h3 {
            color: red;
            text-align: center;
        }

        h2 {
            color: blueviolet;
            text-align: center;
        }
    </style>


</body>

</html>