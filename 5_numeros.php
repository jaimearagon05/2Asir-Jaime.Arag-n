// dado cinco numeros utilizar dos checkbox indica suma y resta dado que el uusario pueda utilizar suma resta o ambas 
 
<?php
if (!isset($_POST['enviar'])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Números</title>
</head>
<body>
    <h2>Ingresa 5 números</h2>
    <form method="POST" action="">
        <label for="numero">Ingrese los 5 números:</label><br>
        <input type="number" name="numero1" required><br>
        <input type="number" name="numero2" required><br>
        <input type="number" name="numero3" required><br>
        <input type="number" name="numero4" required><br>
        <input type="number" name="numero5" required><br>
        <input type="checkbox" name="operacion[]" value="suma"> Sumar<br>
        <input type="checkbox" name="operacion[]" value="resta"> Restar<br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
</body>
</html>
<?php
} else {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
    $numero5 = $_POST['numero5'];

    if (operacion($_POST['operacion'])) {
        $operaciones = $_POST['operacion'];
        if (cuenta("suma", $operaciones)) {
            $suma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5;
            echo "La suma es: " . $suma . "<br>";
        }
        if (cuenta("resta", $operaciones)) {
            $resta = $numero1 - $numero2 - $numero3 - $numero4 - $numero5;
            echo "La resta es: " . $resta . "<br>";
        }
    } else {
        echo "No seleccionaste ninguna operación.";
    }
}
?>
