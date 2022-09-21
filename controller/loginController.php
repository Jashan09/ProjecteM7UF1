<?php
include_once "functions/checkLogin.php";
if(session_start() === PHP_SESSION_NONE) session_start();

    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pass"] = $_POST["pass"];

    $resultat = checkCred($_SESSION["user"], $_SESSION["pass"]);

    if($resultat==null){ //usuari no loggejat
        header("Location: ../view/vistaLogin.php");
        exit();
    }else{//usuari loggejat
        $_SESSION["objUser"] = $resultat;
        header("Location: ../view/inici.php");
        exit();
    }

