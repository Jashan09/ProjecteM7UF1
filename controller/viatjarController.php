<?php
include_once "functions/usuariConsumeixBitllet.php";
if(session_start() === PHP_SESSION_NONE) session_start();

$_SESSION["idBitlletViatjarController"] = $_GET["idBitllet"];

unUsuariGastaBitllet($_SESSION["idBitlletViatjarController"]);



?>