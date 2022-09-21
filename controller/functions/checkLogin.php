<?php
require_once "../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();


$_SESSION["boolProva"] = 0;

function checkCred($username,$pass){
    foreach ($_SESSION["usuaris"] as $usuari){
        $_SESSION["boolProva"] = 1;
        if($usuari->getUser()===$username){
            $_SESSION["boolProva"] = 2;
            if($usuari->getContrasenya()===$pass){
                $_SESSION["boolProva"] = 0;
                return $usuari;
            }
        }
    }
    return null;
}
