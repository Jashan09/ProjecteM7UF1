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

    $bitllet0 = new Bitllet("0","Barcelona","Badalona", "10","hector", true, "2022-09-02",null);
    $bitllet1 = new Bitllet("1","Barcelona","Badalona", "10","hector", false, "2022-09-02", "2022-10/02");
    $bitllet2 = new Bitllet("2","Barcelona","Badalona", "10","hector", true, "2022-09/02", null);
    $bitllet3 = new Bitllet("3","Barcelona","Badalona", "10","pepe", true, "2022-09-02", null);
    $bitllet4 = new Bitllet("4","Barcelona","Badalona", "10","pepe", false, "2022-09-02", "2022-10-02");

    $_SESSION["arrayBitlletsGlobal"][] = $bitllet0;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet1;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet2;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet3;
    $_SESSION["arrayBitlletsGlobal"][] = $bitllet4;


    $hector->addBitllet($bitllet0);
    $_SESSION["idBitllet"]++;
    $hector->addBitllet($bitllet1);
    $_SESSION["idBitllet"]++;
    $hector->addBitllet($bitllet2);
    $_SESSION["idBitllet"]++;
    $pepe->addBitllet($bitllet3);
    $_SESSION["idBitllet"]++;
    $pepe->addBitllet($bitllet4);
    $_SESSION["idBitllet"]++;


    echo "s'acaben d'afegir 5 bitllets";
}

?>