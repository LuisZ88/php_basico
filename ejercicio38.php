<?php
$archivo = "contenido.txt";
$arhivoAbierto = fopen($archivo, "r");
$contenido = fread($arhivoAbierto, filesize($archivo));
echo $contenido;
?>
<!DOCTYPE html>
<html lang="en">