<?php
include_once "functions/checkTrajecte.php";
if(session_start() === PHP_SESSION_NONE) session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("Location: ../view/viatjar.php");
    exit();
}

$_SESSION["dataAnada"] = $_POST["dataAnada"];
$_SESSION["dataTornada"] = $_POST["dataTornada"];

$dataAnada = new DateTime($_SESSION["dataAnada"]);
$dataTornada = new DateTime($_SESSION["dataTornada"]);

//es tenia que haver fet amb un diff millor
if($dataAnada->format('%Y-%m-%d') > $dataTornada->format('%Y-%m-%d')){
    $_SESSION["errorDates"] = "ERROR. La data de tornada és inferior a la data d'anada";
    header("Location: ../view/inici.php");
    exit();
}


$origen = $_POST["origen"];
$destinacio = $_POST["destinacio"];
$_SESSION["anadaTornadaBool"] = $_POST["anadaTornadaBool"];

$_SESSION["trajecte"] = checkTrajecte($origen, $destinacio);

if($_SESSION["trajecte"] != null){
    header("Location: ../view/confirmaBitllets.php");
    exit();
}

if($_SESSION["trajecte"]==null){
    echo "ERROR. L'origen i la destinació és la mateixa.";
    exit();
}

