<?php
include_once "functions/checkRegistre.php";
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



if($_SESSION["pass1"] === $_SESSION["pass2"]){

    foreach ($_SESSION["usuaris"] as $key => $usuari){
        if(($usuari->getUser() == $_SESSION["user"])){

            $_SESSION["ERRORS"] .= "Error. Usuari ja existeix, introdueix un altre" . "<br>";
            header("Location: ../view/register.php");
            $booleanProva = 1;
        }
    }

    if($booleanProva == 0){
        $_SESSION["usuaris"][] = new Persona($_SESSION["user"],$_SESSION["email"],$_SESSION["pass1"]);
        header("Location: ../view/login.php");
    }

}else{

    $_SESSION["ERRORS"] = "Error. Les contrasenyes no coincideixen." . "<br>";

    header("Location: ../view/register.php");
}
