<?php
require_once "../functions/eliminarPersona.php";

$_SESSION["userEliminat"] = $_GET["user"];
$operacio = $_GET["operacio"];


if($operacio == "editar"){

}

if($operacio == "eliminar"){

    $confirmacio = deletePersona($_SESSION["userEliminat"]);

    header("Location: ../../view/viewsDelAdmin/gestionaUsuaris.php");
    exit();

}