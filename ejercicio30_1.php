<?php 
    session_start();

    if(isset($_SESSION["usario"])){
        echo "Sesion iniciada".":<br/>";
        echo $_SESSION["usario"]. "estatus ".$_SESSION["status"]."<br/>";}
    else{echo "Sesion no iniciada";}

?>