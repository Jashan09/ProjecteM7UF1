<?php
include_once "../model/Persona.php";
if(session_status() === PHP_SESSION_NONE) session_start();
unset($_SESSION["objUser"]);
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
include_once "template/nav.php";
?>

<div class="divDelLogin">

<h1>Loggejar-se</h1>
    <br>
<form action="../controller/loginController.php" method="post">
    <label for="user">Nom d'usuari:</label><br>
    <input type="text" id="user" name="user" value="hector"><br>
    <label for="pass">Contrasenya:</label><br>
    <input type="password" id="pass" name="pass" value="1234"><br><br>
    <input type="submit" name="intentDeLogin" value="Loggejar-te">
</form>

    <br>

    <?php
    if($_SESSION["ERRORS"]){
        echo "<h4>" . $_SESSION["ERRORS"] . "</h4>";
        unset($_SESSION["ERRORS"]);
    }
    ?>

</div>

<?php
include_once "template/footer.php";
?>

</body>
</html>

