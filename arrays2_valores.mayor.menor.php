/- declarar un arrays con valores numericos y obtener otro arrays en el que el primer valor sea el mayor de el anterior y el segundo valor el sub 1 sea el menor 
<?php
function valores($numeros) {
    sort($numeros); 
    $nuevoArray = []; 

    $inicio = 0;
    $fin = count($numeros) - 1;

    while ($inicio <= $fin) {
        $nuevoArray[] = $numeros[$fin--]; 
        if ($inicio <= $fin) {
            $nuevoArray[] = $numeros[$inicio++]; 
        }
    }

    return $nuevoArray; 
}

$numeros = [5, 3, 8, 1, 9, 2, 7, 4, 6];

print_r(valores($numeros));
?>
