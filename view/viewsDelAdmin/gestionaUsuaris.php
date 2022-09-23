<?php
require_once "../../model/Persona.php";
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

    <h2>Gestió d'usuaris</h2>
    <br>

    <table>
        <tr>
            <th>Usuari</th>
            <th>Contrasenya</th>
            <th>Email</th>
            <th colspan="2">Funcions</th>
        </tr>
        <?php

        foreach ($_SESSION["usuaris"] as $persona){
            ?>
            <tr>
                <td ><?php echo $persona->getUser()?></td>
                <td><?php echo  $persona->getContrasenya()?></td>
                <td><?php echo $persona->getEmail()?></td>
                <td>        <a href="../../controller/controllersDelAdmin/gestionaUsuarisController.php?user=<?php echo $persona->getUser(); ?>&operacio=editar " style="text-decoration: none; color:white; border-style: solid; color: black; background-color: cadetblue;"  >Editar</a>
                </td>

                <td>        <a href="../../controller/controllersDelAdmin/gestionaUsuarisController.php?user=<?php echo $persona->getUser(); ?>&operacio=eliminar " style="text-decoration: none; color:white; border-style: solid; color: black; background-color: indianred;"  >Eliminar</a>
                </td>
            </tr>
            <?php
        }

        ?>
    </table>

</div>








</body>
</html>

