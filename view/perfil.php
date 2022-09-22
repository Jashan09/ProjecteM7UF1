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

    <form action="../controller/perfilController.php">
        <label for="Username">Username:</label><br>
        <input type="text" id="Username" name="Username" value="<?php echo $_SESSION["objUser"]->getUser();?>"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $_SESSION["objUser"]->getEmail();?>"><br><br>
        <input type="submit" value="Canviar dades">
    </form>

    </div>

    </body>
    </html>

<?php




//$_SESSION["objUser"]->getContrasenya();



