<?php
$numeros = [12, 34, 35, 40, 50, 36, 20];

function existenDosParesEnRango($numeros) {
    $contador = 0;
    foreach ($numeros as $numero) {
        if ($numero >= 30 && $numero <= 40 && $numero % 2 == 0) {
            $contador++;
            if ($contador >= 2) {
                return "si";
            }
        }
    }
    return "no";
}

function mostrarMensaje($resultado) {
    if ($resultado == "si") {
        echo "si existe";
    } else {
        echo "no existe";
    }
}

$resultado = existenDosParesEnRango($numeros);
mostrarMensaje($resultado);
?>
