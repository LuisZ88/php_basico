<?php

$nombreArchivo = "archivo.txt";
$contenidoArchivo = "hola mundo";
$archivoACrear = fopen($nombreArchivo, "w");
fwrite($archivoACrear, $contenidoArchivo);
fclose($archivoACrear);