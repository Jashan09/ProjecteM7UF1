<?php
require_once "../functions/eliminarBitllet2.php";

$_SESSION["idBitllet"] = $_GET["idBitllet"];
$operacio = $_GET["operacio"];


if($operacio == "editar"){

}

if($operacio == "eliminar"){


    $confirmacio = deleteBitllet($_SESSION["idBitllet"]);

    header("Location: ../../view/viewsDelAdmin/gestionaBitllets.php");
    exit();

}