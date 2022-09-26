<?php
require_once "../../model/Bitllet.php";
require_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function deleteBitllet($idBitllet){


    //echo $idBitllet;


    //deleting it in the arrayBitllets of object PERSONA
    foreach ($_SESSION["usuaris"] as $usuari){
        foreach ($usuari->getArrayBitllets() as $bitlletsDelUsuari) {
            if($bitlletsDelUsuari->getIdBitllet() == $idBitllet){
                unset($bitlletsDelUsuari);
            }
        }
    }

    //deleting it in the global array of bitllets
    foreach ($_SESSION["arrayBitlletsGlobal"] as $bitllet){
        if($bitllet->getIdBitllet() == $idBitllet){
            unset($bitllet);
        }
    }










}