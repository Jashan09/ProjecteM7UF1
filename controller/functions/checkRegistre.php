<?php
require_once "../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function checkIfUsernameExists($username){
    foreach ($_SESSION["usuaris"] as $usuari){
        if($usuari->getUser() == $username){
            return true;
        }
    }
    return false;
}