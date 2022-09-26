<?php
include_once "../../model/Persona.php";
include_once "../../model/Bitllet.php";
if(session_start() === PHP_SESSION_NONE) session_start();

$_SESSION["idBitllet"]=0;

if(!isset($_SESSION["usuaris"])){
    $_SESSION["usuaris"] = array();

    $admin = new Persona("admin","admin","admin@gmail.com");
    $admin->setEsAdmin(true);
    $hector = new Persona("hector","1234","hector@gmail.com");
    $pepe = new Persona("pepe","pepe","pepe@hotmail.com");


    $_SESSION['usuaris'][] = $admin;
    $_SESSION['usuaris'][] = $hector;
    $_SESSION['usuaris'][] = $pepe;

    echo "usuari admin, usuari hector i usuari pepe afegits";
}

if(!isset($_SESSION["arrayBitlletsGlobal"])){
    $_SESSION["arrayBitlletsGlobal"] = array();

    $bitllet0 = new Bitllet("0","Barcelona","Badalona", "10","hector");
    $bitllet1 = new Bitllet("1","Barcelona","Badalona", "10","hector");
    $bitllet2 = new Bitllet("2","Barcelona","Badalona", "10","hector");
    $bitllet3 = new Bitllet("3","Barcelona","Badalona", "10","pepe");
    $bitllet4 = new Bitllet("4","Barcelona","Badalona", "10","pepe");

    $_SESSION["arrayBitlletsGlobal"][] = $bitllet0;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet1;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet2;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet3;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet4;


    $hector->addBitllet($bitllet0);
    $hector->addBitllet($bitllet1);
    $hector->addBitllet($bitllet2);
    $pepe->addBitllet($bitllet3);
    $pepe->addBitllet($bitllet4);

    echo "s'acaben d'afegir 5 bitllets";
}

?>