<?php 
    session_start();

    $_SESSION["usario"]="juan";
    $_SESSION["status"]="logged";
    

    echo "Sesion iniciada".":<br/>";
    echo $_SESSION["usario"]. "estatus ".$_SESSION["status"]."<br/>";
?>