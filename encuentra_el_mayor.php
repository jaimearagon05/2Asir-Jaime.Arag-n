// dado 7 numeros en un formulario visualizar el mayor

<?php
    if (!isset($_POST['enviar'])) {
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Mayor de 7 Números con Función</title>
</head>
<body>
    <h2>Ingresa 7 números para encontrar el mayor</h2>

    <!-- Formulario -->
    <form method="POST" action="">
        <label for="numero1">Número 1:</label><br>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label><br>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <label for="numero3">Número 3:</label><br>
        <input type="number" id="numero3" name="numero3" required><br><br>

        <label for="numero4">Número 4:</label><br>
        <input type="number" id="numero4" name="numero4" required><br><br>

        <label for="numero5">Número 5:</label><br>
        <input type="number" id="numero5" name="numero5" required><br><br>

        <label for="numero6">Número 6:</label><br>
        <input type="number" id="numero6" name="numero6" required><br><br>

        <label for="numero7">Número 7:</label><br>
        <input type="number" id="numero7" name="numero7" required><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
    </body>
    </html>
    <?php
    }
    function encontrarMayor($numeros) {
        return max($numeros); 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = [
            $_POST['numero1'],
            $_POST['numero2'],
            $_POST['numero3'],
            $_POST['numero4'],
            $_POST['numero5'],
            $_POST['numero6'],
            $_POST['numero7']
        ];

        $mayor = encontrarMayor($numeros);

        echo "<h3>El mayor de los números es: $mayor</h3>";
    }
    ?>


