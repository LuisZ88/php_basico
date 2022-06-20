<?php 
if($_POST){
    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];
    if(($valorA != $valorB) && ($valorA>$valorB)){
        echo "El valor A es mayor que el valor B y no son iguales";
    }
    if($valorA == $valorB){
        echo "El valor A es igual que el valor B";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        <input type="text" name="valorA" id="">
        <br>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>



</body>
</html>