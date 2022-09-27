<?php
if(session_start() === PHP_SESSION_NONE) session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estils.css?v=<?php echo time(); ?>">

</head>
<body>


<div class="divConfirmaBitllets">

    <h3>Gestió de trajectes</h3>

    <br>

<form action="../../controller/controllersDelAdmin/gestionaTrajectesController.php" method="post">
    <label for="lloc1">Primera destinació:</label>
    <input type="text" id="lloc1" name="lloc1" value="<?php echo $_SESSION["lloc1"] ?>"><br>

    <label for="lloc2">Segona destinació:</label>
    <input type="text" id="lloc2" name="lloc2" value="<?php echo $_SESSION["lloc2"] ?>"><br>

    <label for="lloc3">Primera destinació:</label>
    <input type="text" id="lloc3" name="lloc3" value="<?php echo $_SESSION["lloc3"] ?>"><br>

    <br>
    <label for="preuCas12">Preu de <?php echo $_SESSION["lloc1"] . " a " . $_SESSION["lloc2"]?>:</label>
    <input type="number" id="preuCas12" name="preuCas12" value="<?php echo $_SESSION["preuCas12"] ?>"><br>


    <label for="preuCas12">Preu de <?php echo $_SESSION["lloc1"] . " a " . $_SESSION["lloc3"]?>:</label>
    <input type="number" id="preuCas13" name="preuCas13" value="<?php echo $_SESSION["preuCas13"] ?>"><br>


    <label for="preuCas12">Preu de <?php echo $_SESSION["lloc2"] . " a " . $_SESSION["lloc3"]?>:</label>
    <input type="number" id="preuCas23" name="preuCas23" value="<?php echo $_SESSION["preuCas23"] ?>"><br>

    <br>
    <input type="submit" value="Confirma">
</form>

</div>


<?php



    if ($_SESSION["missatgeDeConfirmació"]) {
        echo "<h4> ".
            $_SESSION["missatgeDeConfirmació"]. "</h4>";
        unset(
            $_SESSION["missatgeDeConfirmació"]);
    }


?>
<?php
include_once "../template/footer.php";
?>


</body>
</html>
