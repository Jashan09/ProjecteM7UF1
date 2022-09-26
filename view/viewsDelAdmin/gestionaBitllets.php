<?php
require_once "../../model/Bitllet.php";
if(session_status() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estils.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>

<div class="divConfirmaBitllets">

    <h2>Gestió de bitllets</h2>
    <br>

    <table>
        <tr>
            <th>idBitllet</th>
            <th>Origen</th>
            <th>Destinacio</th>
            <th>Preu</th>
            <th>Propietari</th>
            <th colspan="2">Funcions</th>
        </tr>
        <?php

        foreach ($_SESSION["arrayBitlletsGlobal"] as $bitllet){
            ?>
            <tr>
                <td ><?php echo $bitllet->getIdBitllet()?></td>
                <td><?php echo  $bitllet->getOrigen()?></td>
                <td><?php echo $bitllet->getDestinacio()?></td>
                <td><?php echo $bitllet->getPreuDelBitllet()?></td>
                <td><?php echo $bitllet->getPropietariDelBitllet()?></td>
                <td><a href="../../controller/controllersDelAdmin/gestionaBitlletsController.php?idBitllet=<?php echo $bitllet->getIdBitllet(); ?>&operacio=editar " style="text-decoration: none; color:white; border-style: solid; color: black; background-color: cadetblue; padding: 0px 5px 0px 5px;"  >Editar</a></td>
                <td><a href="../../controller/controllersDelAdmin/gestionaBitlletsController.php?idBitllet=<?php echo $bitllet->getIdBitllet(); ?>&operacio=eliminar " style="text-decoration: none; color:white; border-style: solid; color: black; background-color: indianred; padding: 0px 5px 0px 5px;"  >Eliminar</a></td>
            </tr>
            <?php
        }

        ?>
    </table>

    <br>



    <?php

    if ($_SESSION["idBitllet"]) {
        echo "<h4> Bitllet " . $_SESSION["idBitllet"] . " eliminat correctament</h4>";
        unset($_SESSION["idBitllet"]);
    }

    ?>

</div>






<?php
include_once "../template/footer.php";
?>

</body>
</html>

