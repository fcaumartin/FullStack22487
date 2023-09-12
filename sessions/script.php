<?php
    session_start();

    if (isset($_POST["email"]) && isset($_POST["password"])) {

        if ($_POST["email"]=="toto@world.com" && $_POST["password"]=="secret"){

            $_SESSION["auth"] = "ok";
            header("Location: index.php");
            exit;
        }

    }

unset($_SESSION["auth"]);
header("Location: login.php");