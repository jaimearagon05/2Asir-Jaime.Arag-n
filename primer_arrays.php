


    <?php
function encontrarMayor($numeros) {
    return max($numeros); 
}

$numeros = [2, 3, 54, 53];

$mayor = encontrarMayor($numeros);

echo "<h3>El mayor de los números es: $mayor</h3>";
?>