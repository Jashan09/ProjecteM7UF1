<?php
include_once "../../model/Persona.php";
if(session_status() === PHP_SESSION_NONE) session_start();

echo "<pre>";
var_dump($_SESSION["usuaris"]);
echo "</pre>";
