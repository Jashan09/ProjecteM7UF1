<?php
include_once "functions/checkLogin.php";
if(session_start() === PHP_SESSION_NONE) session_start();

    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pass"] = $_POST["pass"];

    $resultat = checkCred($_SESSION["user"], $_SESSION["pass"]);

    if($resultat==null){ //usuari no loggejat
        if($_SESSION["boolProva"]==1) {
            $_SESSION["ERRORS"] .= "Error. Usuari no existent en la BBDD..." . "<br>";
            $_SESSION["ERRORS"] .= "Error. Contrasenya incorrecta..." . "<br>";
        }
        if($_SESSION["boolProva"]==2) {
            $_SESSION["ERRORS"] .= "Error. Contrasenya incorrecta..." . "<br>";
        }

        header("Location: ../view/login.php");
        exit();
    }else{//usuari loggejat
        $_SESSION["objUser"] = $resultat;
        header("Location: ../view/inici.php");
        exit();
    }

