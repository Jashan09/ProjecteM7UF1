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
include_once "template/nav.php";
?>

<div class="divDelRegister">

<h1>Registrar-se</h1>

    <br>

<form action="../controller/registerController.php" method="post">
    <label for="user">Nom d'usuari:</label><br>
    <input type="text" id="user" name="user"
        <?php if(isset($_SESSION["user2"])){
            echo "value=" . $_SESSION["user2"];
        }
        ?>
    ><br>

    <label for="email">E-mail:</label><br>
    <input type="text" id="email" name="email"
        <?php if(isset($_SESSION["email2"])){
            echo "value=" . $_SESSION["email2"];
        }
        ?>

    ><br>



    <label for="pass1">Contrasenya:</label><br>
    <input type="password" id="pass1" name="pass1"><br>
    <label for="pass2">Reescriu la contrasenya:</label><br>
    <input type="password" id="pass2" name="pass2"><br><br>
    <input type="submit" value="Registrar-te">
</form>

    <br>

    <?php
    if($_SESSION["ERRORS"]){
        echo "<h4>" . $_SESSION["ERRORS"] . "</h4>";
        unset($_SESSION["ERRORS"]);
    }
    unset($_SESSION["user2"]);
    unset($_SESSION["email2"]);
    ?>

</div>

<?php
include_once "template/footer.php";
?>
</body>
</html>

<?php
