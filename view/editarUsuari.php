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


        <div class="divConfirmaBitllets">

            <h2>Perfil del usuari: <?php echo  $_SESSION["objUserTrobat"]->getUser()?> </h2>
            <br>

            <form action="../controller/editarPersonaController.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $_SESSION["objUserTrobat"]->getUser();?>"><br><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $_SESSION["objUserTrobat"]->getEmail();?>"><br><br>
                <label for="email">Contrasenya:</label>
                <input type="password" id="contrasenya" name="contrasenya" value="<?php echo $_SESSION["objUserTrobat"]->getContrasenya();?>"><br><br>
                <!-- falta fer un foreach dels bitllets que conté el usuari -->
                <input type="submit" name="canviarDadesUsuariNormal" value="Canviar dades">
            </form>

        </div>



    <?php
    include_once "template/footer.php";
    ?>

    </body>
    </html>

<?php




//$_SESSION["objUser"]->getContrasenya();



