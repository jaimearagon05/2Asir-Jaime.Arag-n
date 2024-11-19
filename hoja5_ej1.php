<?php
$palabras = ["mango", "uva", "pera", "banana", "fresa"];

$iniciales_original = "";
foreach ($palabras as $palabra) {
    $iniciales_original .= $palabra[0];
}

$palabras_ordenadas = $palabras;
sort($palabras_ordenadas);

$iniciales_ordenadas = "";
foreach ($palabras_ordenadas as $palabra) {
    $iniciales_ordenadas .= $palabra[0];
}

echo "Iniciales en orden original: " . $iniciales_original . "\n";
echo "Iniciales en ordenado: " . $iniciales_ordenadas . "\n";
?>
