<?php
include_once "functions/checkRegistre.php";
if(session_start() === PHP_SESSION_NONE) session_start();

if($_POST["canviarDadesUsuariNormal"]) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $contrasenya = $_POST["contrasenya"];


    if(checkIfUsernameExists($username)){
        $_SESSION["ERRORS2"] = "Error. Usuari existent a la BBDD, escolleix un altre..." . "<br>";
        header("Location: ../view/perfil.php");
        exit();
    }

    $_SESSION["objUser"]->setUser($username);
    $_SESSION["objUser"]->setEmail($email);
    $_SESSION["objUser"]->setContrasenya($contrasenya);

    $_SESSION["missatgeConfirmacio"] = "Dades modificades correctament.";


    header("Location: ../../view/perfil.php");
    exit();

}



    if($_GET["type"]=="usuaris"){
        header("Location: ../../view/viewsDelAdmin/gestionaUsuaris.php");
        exit();
    }
    if($_GET["type"]=="bitllets"){
        header("Location: ../../view/viewsDelAdmin/gestionaBitllets.php");
        exit();
    }
    if($_GET["type"]=="trajectes"){
        header("Location: ../../view/viewsDelAdmin/gestionaTrajectes.php");
        exit();
    }



