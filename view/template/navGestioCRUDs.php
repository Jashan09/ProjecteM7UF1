<?php
if(session_status() === PHP_SESSION_NONE) session_start();
?>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<nav class="navbar" style="font-size: 1.7em; background-color: cadetblue; position: relative; padding-top: 5px; padding-bottom: 5px;">
    <div class="leftNav" style="display: inline">
        <i class="fas fa-plane"></i>
        <span style="font-family: 'Lato', sans-serif; vertical-align: middle;"> Projecte UF1 </span>
    </div>

    <div class="rightNav" style="display: inline-block; position: absolute; right: 5px;">

        <a href="../viewsDelAdmin/gestionaUsuaris.php" style="text-decoration: none; color:white; border-style: solid; color: black; margin: 0px 10px 0px 10px; padding: 0px 10px 0px 10px; background-color: chocolate; ">Gestió d'usuaris</a>
        <a href="../viewsDelAdmin/gestionaBitllets.php" style="text-decoration: none; color:white; border-style: solid; color: black; margin: 0px 10px 0px 10px; padding: 0px 10px 0px 10px; background-color: chocolate; ">Gestió de bitllets</a>
        <a href="../viewsDelAdmin/gestionaTrajectes.php" style="text-decoration: none; color:white; border-style: solid; color: black; margin: 0px 10px 0px 10px; padding: 0px 10px 0px 10px; background-color: chocolate; ">Gestió de trajectes</a>




    </div>

</nav>



<nav class="navbar" style="font-size: 1.7em; background-color: darkslategray; position: relative; padding-top: 5px; padding-bottom: 5px;">
    <div class="leftNav" style="display: inline">
    </div>

    <div class="rightNav" style="display: inline-block; position: absolute; right: 5px;">

        <a href="../viewsDelAdmin/gestionaUsuaris.php" style="text-decoration: none; color:white; border-style: solid; color: black; background-color: indianred; padding-left: 10px; padding-right: 10px; margin-top: 100px">Tornar al panel</a>




    </div>

</nav>

