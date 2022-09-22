<?php
require_once "../model/Persona.php";
if(session_status() === PHP_SESSION_NONE) session_start();
?>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<nav class="navbar" style="font-size: 1.7em; background-color: cadetblue; position: relative; padding-top: 5px; padding-bottom: 5px;">
    <div class="leftNav" style="display: inline">
        <i class="fas fa-plane"></i>
        <span style="font-family: 'Lato', sans-serif; vertical-align: middle;"> Projecte UF1 </span>
    </div>

    <div class="rightNav" style="display: inline-block; position: absolute; right: 5px;">


        <?php

        if(isset($_SESSION["objUser"])){
            ?>
            <a href="perfil.php"> <?php  echo $_SESSION["objUser"]->getUser(); ?>    </a>
            <?php
        }


        ?>


        <a href="login.php" style="text-decoration: none; color:white; border-style: solid; font-family: Arial; color: black; border-color: darkgreen"> Loggejar-se </a>


        <a href="register.php" style="text-decoration: none; color:white; border-style: solid; font-family: Arial; color: black; border-color: darkgreen">Registar-se</a>



    </div>

</nav>

