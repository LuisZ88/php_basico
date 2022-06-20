<?php
        $nombre=$_POST['txtNombre'];
        if($_POST){
            echo "Hola ".$nombre;
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
    Hola mundo

    <form action="ejercicio2.php" method="post">
        Nombre
    <input type="text" name="txtNombre">
    <input type="submit">
</body>
</html>
