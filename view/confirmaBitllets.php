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

    <?php
    echo  "<h3> Client: " . $_SESSION["objUser"]->getUser() . "</h3>";
    ?>

    <br>

    <?php

    //$_SESSION["anadaTornadaBool"];


    switch ($_SESSION["trajecte"]) {
        case "12":
            $origen = $_SESSION["lloc1"];
            $destinacio = $_SESSION["lloc2"];
            $preuBitllet = $_SESSION["preuCas12"];
            break;
        case "21":
            $origen = $_SESSION["lloc2"];
            $destinacio = $_SESSION["lloc1"];
            $preuBitllet = $_SESSION["preuCas12"];
            break;
        case "13":
            $origen = $_SESSION["lloc1"];
            $destinacio = $_SESSION["lloc3"];
            $preuBitllet = $_SESSION["preuCas13"];
            break;
        case "31":
            $origen = $_SESSION["lloc3"];
            $destinacio = $_SESSION["lloc1"];
            $preuBitllet = $_SESSION["preuCas13"];
            break;
        case "23":
            $origen = $_SESSION["lloc2"];
            $destinacio = $_SESSION["lloc3"];
            $preuBitllet = $_SESSION["preuCas23"];
            break;
        case "32":
            $origen = $_SESSION["lloc3"];
            $destinacio = $_SESSION["lloc2"];
            $preuBitllet =$_SESSION["preuCas23"];
            break;
    }



    echo "Origen: " . $origen . "<br>";
    echo "Destinacio: " . $destinacio . "<br>";
    echo "Preu: " . $preuBitllet . "$" . "<br>";
    echo "Anada i Tornada: " . $_SESSION["anadaTornadaBool"] . "<br>";

    ?>

    <br>

    <a href="../controller/confirmaBitlletController.php?origen=<?php echo $origen;?>&destinacio=<?php echo $destinacio;?>&preuBitllet=<?php echo $preuBitllet;?>"
       style="text-decoration: none; color:white; border-style: solid; color: black; background-color: cornflowerblue; padding: 0px 5px 0px 5px;" >
        Confirmar compra de bitllet</a>

    <br>
    <br>

    <a href="inici.php"
       style="text-decoration: none; color:white; border-style: solid; color: black; background-color: indianred; padding: 0px 5px 0px 5px;" >
        Anul·la la compra</a>


</div>


<?php
include_once "template/footer.php";
?>

</body>
</html>


