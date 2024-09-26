<?php
function calcular($a, $b) {
    if ($a == $b) {
        echo "La suma de $a y $b es: " . ($a + $b);
    } else {
        echo "El producto de $a y $b es: " . ($a * $b);
    }
}

echo calcular(5, 5);  
?>
