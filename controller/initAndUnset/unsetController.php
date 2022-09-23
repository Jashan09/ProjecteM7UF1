<?php
include_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

unset($_SESSION["usuaris"]);
unset($_SESSION["idBitllet"]);
unset($_SESSION["arrayBitlletsGlobal"]);

echo "unsetajat l'array d'usuaris";