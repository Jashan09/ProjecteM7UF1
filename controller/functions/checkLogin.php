<?php
require_once "../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function checkCred($username,$pass){
    foreach ($_SESSION["usuaris"] as $usuari){
        if($usuari->getUser()===$username){
            if($usuari->getContrasenya()===$pass){
                return $usuari;
            }
        }
    }
    return null;
}
