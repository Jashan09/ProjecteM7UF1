<?php
include_once "functions/checkTrajecte.php";
if(session_start() === PHP_SESSION_NONE) session_start();

$origen = $_POST["origen"];
$destinacio = $_POST["destinacio"];

$trajecte = checkTrajecte($origen, $destinacio);


if($trajecte=="12" or $trajecte == "21"){
    header("Location: ../view/login.php");
    exit();
}

if($trajecte=="13" or $trajecte == "31"){
    header("Location: ../view/login.php");
    exit();
}

if($trajecte=="23" or $trajecte == "32"){
    header("Location: ../view/login.php");
    exit();
}

if($trajecte==null){
    echo "ERROR. L'origen i la destinació és la mateixa.";
    exit();
}
