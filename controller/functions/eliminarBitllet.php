<?php
require_once "../../model/Bitllet.php";
require_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

function deleteBitllet($idBitllet){

    foreach ($_SESSION["arrayBitlletsGlobal"] as $objBitllet){
        if($objBitllet->getIdBitllet() == $idBitllet ){
            $bitllet = $objBitllet;
        }
    }

    foreach ($_SESSION["usuaris"] as $key => $usuari){
        if($usuari->getUser()===$bitllet->getPropietariDelBitllet()){
            $elArrayDeBitlletsDelMateixUsuari =  $usuari->getArrayBitllets();
        }
    }


    foreach ($elArrayDeBitlletsDelMateixUsuari as $key => $unBitllet){
        if($unBitllet->getIdBitllet == $idBitllet){
            unset($elArrayDeBitlletsDelMateixUsuari[$key]);
        }
    }

      foreach ($_SESSION["arrayBitlletsGlobal"] as $key => $unAltreBitllet){
          if($unAltreBitllet->getIdBitllet == $idBitllet){
              unset($_SESSION["arrayBitlletsGlobal"][$key]);
              return true;
          }
      }

    return false;

}