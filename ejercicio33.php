<?php
$jsonContenido = '[
    {"nombre":"Luis", "apellido":"Perez", "edad":30},
    {"nombre":"Juan", "apellido":"Peroz", "edad":20},
    {"nombre":"Pedro", "apellido":"Peraz", "edad":10}
]';

$resultado = json_decode($jsonContenido);

foreach ($resultado as $persona) {
    echo $persona->nombre . " " . $persona->apellido . " " . $persona->edad . "<br>";
}