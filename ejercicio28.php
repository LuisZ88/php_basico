<?php

$servidor="localhost";
$usuario="root";
$password="";


try {
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
    $conexion->exec($sql);
    echo "Conexion exitosa";
} catch (PDOException $e) {
    //throw $th;
    echo "Conexion fallida".$e;
}

?>