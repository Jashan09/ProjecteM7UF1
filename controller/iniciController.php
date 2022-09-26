<?php
include_once "functions/checkTrajecte.php";
if(session_start() === PHP_SESSION_NONE) session_start();


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("Location: ../view/viatjar.php");
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

