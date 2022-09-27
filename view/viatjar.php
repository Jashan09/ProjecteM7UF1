<?php
require_once "../model/Persona.php";
require_once "../model/Bitllet.php";
if(session_status() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estils.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>

<div class="divConfirmaBitllets">

    <h2>Tots els viatjes disponible del usuari <?php echo $_SESSION["objUser"]->getUser() ?></h2>
    <br>

    <table>
        <tr>
            <th>idBitllet</th>
            <th>Origen</th>
            <th>Destinacio</th>
            <th colspan="3">D'anada i tornada</th>
            <th></th>
        </tr>
        <?php

        foreach ($_SESSION["arrayBitlletsGlobal"] as $bitllet){

           if($bitllet->getPropietariDelBitllet() == $_SESSION["objUser"]->getUser() && $bitllet->getGastatBool() == false){

            ?>

            <tr>
                <td ><?php echo $bitllet->getIdBitllet()?></td>
                <td><?php echo  $bitllet->getOrigen()?></td>
                <td><?php echo $bitllet->getDestinacio()?></td>
                <td><?php if($bitllet->getBitlletAnadaTornada() != null){
                        echo "No";
                    }else{
                        echo "Sí";
                    }
                    ?>
                </td>
                <td><?php echo $bitllet->getDataAnada() ?></td>
                <td><?php echo $bitllet->getDataTornada() ?></td>
                <td><a href="../../controller/viatjarController.php?idBitllet=<?php echo $bitllet->getIdBitllet(); ?>" style="text-decoration: none; color:white; border-style: solid; color: black; background-color: cadetblue; padding: 0px 5px 0px 5px;"  >Consumir</a></td>
            </tr>
            <?php
           }
        }

        ?>
    </table>

    <br>


    <?php


    if ($_SESSION["idBitlletLOL"]) {
        echo "<h4> Bitllet " . $_SESSION["idBitlletLOL"] . " eliminat correctament</h4>";
        unset($_SESSION["idBitlletLOL"]);
    }

    ?>

</div>




<div class="divConfirmaBitllets">

    <h2>Historial de viatjes realitzats</h2>
    <br>

    <table>
        <tr>
            <th>idBitllet</th>
            <th>Origen</th>
            <th>Destinacio</th>
            <th colspan="3">D'anada i tornada</th>
        </tr>
        <?php

        foreach ($_SESSION["arrayBitlletsGlobal"] as $bitllet){

            if($bitllet->getPropietariDelBitllet() == $_SESSION["objUser"]->getUser() && $bitllet->getGastatBool() == true){

                ?>

                <tr>
                    <td ><?php echo $bitllet->getIdBitllet()?></td>
                    <td><?php echo  $bitllet->getOrigen()?></td>
                    <td><?php echo $bitllet->getDestinacio()?></td>
                    <td><?php if($bitllet->getBitlletAnadaTornada() != null){
                            echo "No";
                        }else{
                            echo "Sí";
                        }
                        ?>
                    </td>
                    <td><?php echo $bitllet->getDataAnada() ?></td>
                    <td><?php echo $bitllet->getDataTornada() ?></td>

                </tr>
                <?php
            }
        }

        ?>
    </table>

    <br>
</div>





<?php
include_once "template/footer.php";
?>

</body>
</html>

