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

    if($_SESSION["trajecte"]=="12"){
        $origen = "Barcelona";
        $destinacio = "Badalona";
        $preuTrajecte = 10;
    }


    echo "Origen: " . $origen . "<br>";
    echo "Destinacio: " . $destinacio . "<br>";
    echo "Preu: " . $preuTrajecte . "$" . "<br>";

    ?>

</div>




</body>
</html>



<?php

if($_SESSION["trajecte"]=="12"){
    $origen = "Barcelona";
    $destinacio = "Badalona";
}



?>