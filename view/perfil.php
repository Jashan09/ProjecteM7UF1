<?php
include_once "../model/Persona.php";
if(session_status() === PHP_SESSION_NONE) session_start();
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/estils.css?v=<?php echo time(); ?>">
    </head>
    <body>



    <?php
    if($_SESSION["objUser"]->getUser() != "admin"){
        ?>

    <div class="divConfirmaBitllets">

        <h2>Perfil del usuari: <?php echo  $_SESSION["objUser"]->getUser()?> </h2>
        <br>

    <form action="../controller/perfilController.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $_SESSION["objUser"]->getUser();?>"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $_SESSION["objUser"]->getEmail();?>"><br><br>
        <label for="email">Contrasenya:</label>
        <input type="password" id="contrasenya" name="contrasenya" value="<?php echo $_SESSION["objUser"]->getContrasenya();?>"><br><br>
        <!-- falta fer un foreach dels bitllets que conté el usuari -->
        <input type="submit" name="canviarDadesUsuariNormal" value="Canviar dades">
    </form>


        <?php

        if(isset($_SESSION["missatgeDeConfirmacio"])){
            echo $_SESSION["missatgeConfirmacio"];
            unset($_SESSION["missatgeConfirmacio"]);
        }

        ?>

    </div>

        <?php
    }

    if($_SESSION["objUser"]->getUser() == "admin"){
    ?>



    <div class="divConfirmaBitllets">

        <h2>Panel d'admin</h2>
        <br>

        <!--
        perfilController.php
        gestionaUsuaris.php
        -->

        <a href="../controller/perfilController.php?var=clau" style="text-decoration: none; color:white; border-style: solid; color: black; background-color: cadetblue; font-size:25px"  >Gestionar usuaris</a>
        <br>
        <br>
        <a href="" style="text-decoration: none; color:white; border-style: solid; color: black; background-color: cadetblue; font-size:25px">Gestionar bitllets</a>
        <br>
        <br>
        <a href="" style="text-decoration: none; color:white; border-style: solid; color: black; background-color: cadetblue; font-size:25px">Gestionar trajectes</a>

    </div>

        <?php
    }
        ?>





    </body>
    </html>

<?php




//$_SESSION["objUser"]->getContrasenya();



