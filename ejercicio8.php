<?php 
if($_POST){
    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multiplicacion = $valorA * $valorB;
    $division = $valorA / $valorB;
    $modulo = $valorA % $valorB;
    echo "La suma es: $suma<br>";
    echo "La resta es: $resta<br>";
    echo "La multiplicación es: $multiplicacion<br>";
    echo "La división es: $division<br>";
    echo "El módulo es: $modulo<br>";
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
    <form action="ejercicio8.php" method="post">
        <input type="text" name="valorA" id="">
        <br>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>



</body>
</html>