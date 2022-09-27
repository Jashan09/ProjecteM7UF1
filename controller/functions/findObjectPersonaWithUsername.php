<?php
require_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function findObjectPersonaWithUsername($username){
    foreach ($_SESSION["usuaris"] as $unObjUsuari){
        if($unObjUsuari->getUser()===$username){
            return $unObjUsuari;
        }
    }
    return null;
}