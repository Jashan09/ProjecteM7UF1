<?php
require_once "../../model/Bitllet.php";
require_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function deleteBitllet($idBitllet,$propietari){

    $operacionsFetes = 0;

    $elUserDelBitllet = "";


    foreach ($_SESSION["usuaris"] as $usuari){
        if($usuari->getUser() == $propietari){
            $objPropietari = $usuari;
        }
    }


  //deleting it in the arrayBitllets of object PERSONA
    $objPropietari->removeBitllet2($idBitllet);
    $operacionsFetes++;


    //també l'esborro de l'array global de bitllets

    unset($_SESSION["arrayBitlletsGlobal"][$idBitllet]);
    $operacionsFetes++;


    if($operacionsFetes == 2){
        return true;
    }else{
        return false;
    }


}