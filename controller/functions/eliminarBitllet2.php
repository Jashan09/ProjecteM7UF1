<?php
require_once "../../model/Bitllet.php";
require_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function deleteBitllet($idBitllet){

    $operacionsFetes = 0;

    $elUserDelBitllet = "";

    foreach ($_SESSION["arrayBitlletsGlobal"] as $bitllet){
        if($bitllet->getIdBitllet() == $idBitllet){
            $elUserDelBitllet = $bitllet->getPropietariDelBitllet();
        }
    }

    //amb el metode removeBitllet del objecte Persona
    foreach ($_SESSION["usuaris"] as $usuari){
        if($usuari->getUser() == $elUserDelBitllet){
            $usuari->removeBitllet($idBitllet);
            $operacionsFetes++;
        }
    }


    //deleting it in the global array of bitllets

    unset($_SESSION["arrayBitlletsGlobal"][$idBitllet]);
    $operacionsFetes++;


    if($operacionsFetes == 2){
        return true;
    }else{
        return false;
    }


}