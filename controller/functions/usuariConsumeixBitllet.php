<?php
require_once "../model/Bitllet.php";
require_once "../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function unUsuariGastaBitllet($idBitllet){

foreach ($_SESSION["arrayBitlletsGlobal"] as $bitllet){
    if($bitllet->getIdBitllet() == $idBitllet){
        $bitllet->setGastatBool(true);
        return true;
    }
}

return false;





}