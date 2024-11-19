<?php
// dado un nombre compuesto jose antonio ... obtener solo el primer nombre propio

$nombreCompleto = "José Antonio";
$nombres = explode(" ", $nombreCompleto);
$primerNombre = $nombres[0]; 

echo $primerNombre;
?>
