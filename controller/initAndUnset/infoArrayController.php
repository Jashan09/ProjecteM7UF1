<?php
include_once "../../model/Persona.php";
include_once "../../model/Bitllet.php";
if(session_status() === PHP_SESSION_NONE) session_start();

echo "<pre>";
var_dump($_SESSION["usuaris"]);
echo "</pre>";


?>

<br>
<br>

<?php


echo "<pre>";
print_r($_SESSION["usuaris"]);
echo "</pre>";


echo "<pre>";
print_r($_SESSION["arrayBitlletsGlobal"]);
echo "</pre>";


