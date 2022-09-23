<?php
require_once "../model/Bitllet.php";
require_once "../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();


$origen = $_GET["origen"];
$destinacio = $_GET["destinacio"];
$preuBitllet = $_GET["preuBitllet"];


$nouBitllet = new Bitllet($origen,$destinacio,$preuBitllet);

$_SESSION["objUser"]->addBitllet($nouBitllet);


echo "<pre>";
var_dump($_SESSION["usuaris"]);
echo "</pre>";
