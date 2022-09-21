<?php
include "../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

$_SESSION["user"] = $_POST["user"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["pass1"] = $_POST["pass1"];
$_SESSION["pass2"] = $_POST["pass2"];


if(checkIfUsernameExists( $_SESSION["user"])){
    $_SESSION["ERRORS"] = "Error. Usuari existent a la BBDD, escolleix un altre..." . "<br>";
    header("Location: ../view/register.php");
    die();
}
