
    
    <?php
    // Mostrar el formulario si no se ha enviado
    if (!isset($_POST['enviar'])) {
    ?>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma o Resta</title>
</head>
<body>
    <h2>Sumar o Restar</h2>
        <form method="POST" action="">
            <label for="numero1">Número 1:</label>
            <input type="number" name="numero1" id="numero1" required>
            <br><br>

            <label for="numero2">Número 2:</label>
            <input type="number" name="numero2" id="numero2" required>
            <br><br>

            <label for="operacion">Operación:</label>
            <input type="radio" id="suma" name="operacion" value="suma" required>
            <label for="suma">Sumar</label>

            <input type="radio" id="resta" name="operacion" value="resta">
            <label for="resta">Restar</label>
            <br><br>

            <input type="submit" name="enviar" value="Calcular">
        </form>
        </body>
</html>
    <?php
    } else {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        if (is_numeric($numero1) && is_numeric($numero2)) {
            if ($operacion == 'suma') {
                $resultado = $numero1 + $numero2;
                echo "<h3>Resultado de la suma: $resultado</h3>";
            } elseif ($operacion == 'resta') {
                $resultado = $numero1 - $numero2;
                echo "<h3>Resultado de la resta: $resultado</h3>";
            }
        } else {
            echo "<h3>Por favor, ingresa números válidos.</h3>";
        }
    }
    ?>

