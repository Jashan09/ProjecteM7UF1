<?php
require_once "../functions/eliminarBitllet2.php";

$_SESSION["idBitlletLOL"] = $_GET["idBitllet"];
$propietari = $_GET["propietari"];
$operacio = $_GET["operacio"];


if($operacio == "editar"){

}

if($operacio == "eliminar"){


    $confirmacio = deleteBitllet($_SESSION["idBitlletLOL"],$propietari);

    header("Location: ../../view/viewsDelAdmin/gestionaBitllets.php");
    exit();

}