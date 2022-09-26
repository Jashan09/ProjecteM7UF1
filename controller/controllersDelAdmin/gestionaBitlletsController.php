<?php
require_once "../functions/eliminarBitllet2.php";

$_SESSION["idBitllet"] = $_GET["idBitllet"];
$propietari = $_GET["propietari"];
$operacio = $_GET["operacio"];


if($operacio == "editar"){

}

if($operacio == "eliminar"){


    $confirmacio = deleteBitllet($_SESSION["idBitllet"],$propietari);

    header("Location: ../../view/viewsDelAdmin/gestionaBitllets.php");
    exit();

}