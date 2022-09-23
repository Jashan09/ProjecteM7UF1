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

    <?php
    foreach ($_SESSION["usuaris"] as $persona){
        echo "<strong>Usuari: </strong>" . $persona->getUser();
        echo " | <strong>Contrasenya: </strong>" . $persona->getContrasenya();
        echo " | <strong>Email: </strong>" . $persona->getEmail() . " ";

        echo "<input type='submit' value='Editar' style='background-color: cadetblue; b'>";
        echo "<input type='submit' value='Eliminar'>";


        echo "<br>";
        echo "<br>";

    }

    ?>

</div>





</body>
</html>

