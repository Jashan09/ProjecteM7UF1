<?php
include_once "../../model/Persona.php";
include_once "../../model/Bitllet.php";
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
        <link rel="stylesheet" href="/view/css/estils.css?v=<?php echo time(); ?>">


    </head>
    <body>

    <div class="nouEstilPerInfoArrays">

        <h3>Usuaris</h3>
        <br>

        <pre>
<?
print_r($_SESSION["usuaris"]);
?>
        </pre>

    </div >


    <div class="nouEstilPerInfoArrays">

        <h3>Bitllets de cada usuari</h3>
        <br>

        <pre>
<?


$quantitatTotalDeBitllets = 0;

foreach ($_SESSION["usuaris"] as $usuari){
    echo "Usuari: " . $usuari->getUser();
    echo "<br>";
    foreach ($usuari->getArrayBitllets() as $bitlletsDelUsuari) {
        echo "ID: [" . $bitlletsDelUsuari->getIdBitllet() . "]";
        echo " Origen: " . $bitlletsDelUsuari->getOrigen();
        echo " | Destinació: " . $bitlletsDelUsuari->getOrigen();
        echo "<br>";
        $quantitatTotalDeBitllets++;
    }
    echo "<br>";
}

echo "<strong>Quantitat total de bitllets entre tots els usuaris: </strong>" . $quantitatTotalDeBitllets;

?>


        </pre>

    </div >

    <div class="nouEstilPerInfoArrays" >

        <h3>Bitllets</h3>
        <br>


        <pre>
<?
print_r($_SESSION["arrayBitlletsGlobal"]);
?>
        </pre>


    </div >



    </body>
    </html>



<br>
<br>

<?php





/*

echo "<pre>";
print_r($_SESSION["arrayBitlletsGlobal"]);
echo "</pre>";


*/