<?php
include_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

$_SESSION["idBitllet"]=0;

if(!isset($_SESSION["usuaris"])){
    $_SESSION["usuaris"] = array();

    $admin = new Persona("admin","admin","admin@gmail.com");
    $admin->setEsAdmin(true);
    $user = new Persona("hector","1234","hola@gmail.com");

    $_SESSION['usuaris'][] = $admin;
    $_SESSION['usuaris'][] = $user;

    echo "usuari admin i usuari 'hector' afegits";
}

?>