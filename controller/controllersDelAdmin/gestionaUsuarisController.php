<?php
require_once "../functions/findObjectPersonaWithUsername.php";
require_once "../functions/eliminarPersona.php";

$usuari = $_GET["user"];

$operacio = $_GET["operacio"];

if($operacio == "editar"){

    $_SESSION["objUserTrobat"] = findObjectPersonaWithUsername($usuari);
    header("Location: ../../view/editarUsuari.php");
    exit();

}

if($operacio == "eliminar"){

    $_SESSION["userEliminat"] = deletePersona($usuari);

    header("Location: ../../view/viewsDelAdmin/gestionaUsuaris.php");
    exit();

}