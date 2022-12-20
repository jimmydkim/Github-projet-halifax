<?php
session_start();
unset(
    $_SESSION['mdp']

);
unset(
    $_SESSION['mail']

);
unset(
    $_SESSION['ID']

);
header("location:Login.php");
