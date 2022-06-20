<?php

$servidor="localhost";
$usuario="root";
$password="";


try {
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql="SELECT * FROM `fotos`";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    print_r($resultado);

    foreach($resultado as $foto){
        echo $foto['nombre']."<br>";
    }


    echo "Conexion exitosa";
} catch (PDOException $e) {
    //throw $th;
    echo "Conexion fallida".$e;
}

?>