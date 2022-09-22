<?php
include_once "functions/checkTrajecte.php";
if(session_start() === PHP_SESSION_NONE) session_start();

$origen = $_POST["origen"];
$destinacio = $_POST["destinacio"];

$_SESSION["trajecte"] = checkTrajecte($origen, $destinacio);

if($_SESSION["trajecte"] != null){
    header("Location: ../view/ventaBitllets.php");
    exit();
}

if($_SESSION["trajecte"]==null){
    echo "ERROR. L'origen i la destinació és la mateixa.";
    exit();
}
