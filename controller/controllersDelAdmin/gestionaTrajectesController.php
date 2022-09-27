<?php
if(session_start() === PHP_SESSION_NONE) session_start();


$_SESSION["lloc1"]  = $_POST["lloc1"];
$_SESSION["lloc2"]  = $_POST["lloc2"];
$_SESSION["lloc3"]  = $_POST["lloc3"];

$_SESSION["preuCas12"]  = $_POST["preuCas12"];
$_SESSION["preuCas13"]  = $_POST["preuCas13"];
$_SESSION["preuCas23"]  = $_POST["preuCas23"];


$_SESSION["missatgeDeConfirmació"] = "S'acaben de realitzar els canvis en el trajecte...";

header("Location: ../../view/viewsDelAdmin/gestionaTrajectes.php");
