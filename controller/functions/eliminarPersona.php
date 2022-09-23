<?php
require_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function deletePersona($username){
    foreach ($_SESSION["usuaris"] as $key => $usuari){
        if($usuari->getUser()===$username){
            unset($_SESSION["usuaris"][$key]);
            return true;
        }
    }
    return false;
}