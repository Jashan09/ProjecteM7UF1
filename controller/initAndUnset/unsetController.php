<?php
include_once "../../model/Persona.php";
if(session_start() === PHP_SESSION_NONE) session_start();

unset($_SESSION["usuaris"]);
unset($_SESSION["idBitllet"]);
unset($_SESSION["arrayBitlletsGlobal"]);

unset($_SESSION["lloc1"]);
unset($_SESSION["lloc2"]);
unset($_SESSION["lloc3"]);


unset($_SESSION["preuCas12"]);
unset($_SESSION["preuCas13"]);
unset($_SESSION["preuCas23"]);




echo "unsetajat l'array d'usuaris";