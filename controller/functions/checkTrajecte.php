<?php
if(session_start() === PHP_SESSION_NONE) session_start();

function checkTrajecte($origen,$destinacio){

//CAS 1
if($origen == "lloc1" && $destinacio == "lloc2"){
    return "12";
}
if($origen == "lloc2" && $destinacio == "lloc1"){
    return "21";
}

//CAS 2
if($origen == "lloc1" && $destinacio == "lloc3"){
        return "13";
}
if($origen == "lloc3" && $destinacio == "lloc1"){
        return "31";
}

//CAS 3
if($origen == "lloc2" && $destinacio == "lloc3"){
        return "23";
}
if($origen == "lloc3" && $destinacio == "lloc2"){
        return "32";
}

//CAS NULL
if($origen == $destinacio){
    return null;
}




/*

//CAS 1
if($origen or $destinacio == "lloc1" && $origen or $destinacio == "lloc2"){
        return "Cas 1";
}

//CAS 2
if($origen or $destinacio == "lloc1" && $origen or $destinacio == "lloc3"){
        return "Cas 2";
}


//CAS 3
if($origen or $destinacio == "lloc2" && $origen or $destinacio == "lloc3"){
        return "Cas 3";
}




 */


return null;


}



/*

       <option value="lloc1">Destinació d'inici</option>
        <option value="lloc2">Segona destinació</option>
        <option value="lloc3">Tercera destinació</option>



 */




?>