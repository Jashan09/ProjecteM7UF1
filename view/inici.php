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


<div class="formulariPrincipal">

    <h2>Destinacions</h2>
    <br>

<form action="../controller/iniciController.php" method="post">

    <label for="origen">Origen:</label>
    <select id="origen" name="origen">
        <option value="lloc1">Barcelona</option>
        <option value="lloc2">Badalona</option>
        <option value="lloc3">Tarragona</option>
    </select>
    <br>
    <br>
    <label for="destinacio">Destinació:</label>
    <select id="destinacio" name="destinacio">
        <option value="lloc2">Badalona</option>
        <option value="lloc1">Barcelona</option>
        <option value="lloc3">Tarragona</option>
    </select>
    <br>
    <br>
    <label for="anadaTornadaBool">D'anada i tornada</label>
    <input type="checkbox" id="anadaTornadaBool" name="anadaTornadaBool">
    <br>
    <br>
    <input type="submit" value="Confirmar el trajecte">
</form>

</div>

<?php  if(isset($_SESSION["confirmacioBitllet"])){
    ?>
<div class="taulaDePreus">
    <h3>Acabas de comprar un bitllet!</h3>
</div>
<?php
    unset($_SESSION["confirmacioBitllet"]);
}
?>

<div class="taulaDePreus">

    <h2>Preus</h2>
    <br>

    <p class="pMajor">Destinació d'inici -> Segona destinació</p>
    <small>10$</small>
    <br>
    <p class="pMajor">Destinació d'inici -> Tercera destinació</p>
    <small>20$</small>
    <br>
    <br>
    <p class="pMajor">Segona destinació -> Destinació d'inici</p>
    <small>10$</small>
    <br>
    <p class="pMajor">Segona destinació -> Tercera destinació</p>
    <small>10$</small>

    <br>
    <br>
    <p class="pMajor">Tercera destinació -> Destinació d'inici</p>
    <small>20$</small>
    <br>
    <p class="pMajor">Tercera destinació -> Segona destinació</p>
    <small>10$</small>



</div>


<div class="divConfirmaBitllets">
    <a href="/controller/iniciController.php">Realitzar viatjes</a>
    <br>
</div>




<?php
include_once "template/footer.php";
?>

<!--
position: sticky
-->



</body>
</html>






<?php
