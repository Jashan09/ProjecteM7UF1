<?php
include_once "functions/checkLogin.php";
if(session_start() === PHP_SESSION_NONE) session_start();

$username = $_POST["username"];
$email = $_POST["email"];
$contrasenya = $_POST["contrasenya"];

$_SESSION["objUserTrobat"]->setUser($username);
$_SESSION["objUserTrobat"]->setEmail($email);
$_SESSION["objUserTrobat"]->setContrasenya($contrasenya);

header("Location: /../view/viewsDelAdmin/gestionaUsuaris.php");
exit();