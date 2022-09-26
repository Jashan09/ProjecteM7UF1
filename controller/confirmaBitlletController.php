<?php
require_once "../model/Bitllet.php";
require_once "../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();


$origen = $_GET["origen"];
$destinacio = $_GET["destinacio"];
$preuBitllet = $_GET["preuBitllet"];


$nouBitllet = new Bitllet($_SESSION["idBitllet"],$origen,$destinacio,$preuBitllet,$_SESSION["objUser"]->getUser(),$_SESSION["anadaTornadaBool"]);

$_SESSION["idBitllet"]++;


$_SESSION["arrayBitlletsGlobal"][] = $nouBitllet;

$_SESSION["objUser"]->addBitllet($nouBitllet);



$_SESSION["confirmacioBitllet"] = true;
header("Location: ../view/inici.php");
exit();
