<?php
if (!isset($_POST['enviar'])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Datos Personales</title>
</head>
<body>
    <h2>Formulario de Datos Personales</h2>

    <form method="POST" action="">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos"><br><br>

        <label for="edad">Edad:</label><br>
        <select id="edad" name="edad">
            <option value="">Seleccione...</option>
            <option value="18-25">18-25</option>
            <option value="26-35">26-35</option>
            <option value="36-45">36-45</option>
            <option value="46-55">46-55</option>
            <option value="55+">55+</option>
        </select><br><br>

        <label for="peso">Peso (kg):</label><br>
        <input type="number" id="peso" name="peso"><br><br>

        <label for="sexo">Sexo:</label><br>
        <input type="radio" id="hombre" name="sexo" value="Hombre">
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer">
        <label for="mujer">Mujer</label><br><br>

        <label for="estado_civil">Estado Civil:</label><br>
        <input type="radio" id="soltero" name="estado_civil" value="Soltero">
        <label for="soltero">Soltero</label>
        <input type="radio" id="casado" name="estado_civil" value="Casado">
        <label for="casado">Casado</label>
        <input type="radio" id="otro" name="estado_civil" value="Otro">
        <label for="otro">Otro</label><br><br>

        <label for="aficiones">Aficiones:</label><br>
        <input type="checkbox" id="cine" name="aficiones[]" value="Cine">
        <label for="cine">Cine</label>
        <input type="checkbox" id="literatura" name="aficiones[]" value="Literatura">
        <label for="literatura">Literatura</label>
        <input type="checkbox" id="tebeos" name="aficiones[]" value="Tebeos">
        <label for="tebeos">Tebeos</label><br>
        <input type="checkbox" id="deporte" name="aficiones[]" value="Deporte">
        <label for="deporte">Deporte</label>
        <input type="checkbox" id="musica" name="aficiones[]" value="Música">
        <label for="musica">Música</label>
        <input type="checkbox" id="television" name="aficiones[]" value="Televisión">
        <label for="television">Televisión</label><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
    </body>
    </html>
    <?php
    }
    // ------------------- FUNCIONES -------------------
    function validarCampos() {
        $errores = "";

        if (empty($_POST['nombre'])) {
            $errores .= "El campo 'Nombre' es obligatorio.<br>";
        }
        if (empty($_POST['apellidos'])) {
            $errores .= "El campo 'Apellidos' es obligatorio.<br>";
        }
        if (empty($_POST['edad'])) {
            $errores .= "El campo 'Edad' es obligatorio.<br>";
        }
        if (empty($_POST['peso'])) {
            $errores .= "El campo 'Peso' es obligatorio.<br>";
        }
        if (empty($_POST['sexo'])) {
            $errores .= "El campo 'Sexo' es obligatorio.<br>";
        }
        if (empty($_POST['estado_civil'])) {
            $errores .= "El campo 'Estado Civil' es obligatorio.<br>";
        }
        if (empty($_POST['aficiones'])) {
            $errores .= "El campo 'Aficiones' es obligatorio.<br>";
        }

        return $errores;
    }

    // --------------- PROGRAMA PRINCIPAL -------------------
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errores = validarCampos();

        if (empty($errores)) {
            $nombre = ($_POST['nombre']);
            $apellidos = ($_POST['apellidos']);
            $edad = ($_POST['edad']);
            $peso = ($_POST['peso']);
            $sexo = ($_POST['sexo']);
            $estado_civil = ($_POST['estado_civil']);
            $aficiones = ($_POST['aficiones']) ? $_POST['aficiones'] : [];


            echo "<h3>Datos recibidos:</h3>";
            echo "Nombre: $nombre<br>";
            echo "Apellidos: $apellidos<br>";
            echo "Edad: $edad<br>";
            echo "Peso: $peso kg<br>";
            echo "Sexo: $sexo<br>";
            echo "Estado Civil: $estado_civil<br>";
            echo "Aficiones: " . implode(", ", $aficiones) . "<br>";

        } else {
            echo "<h3>Errores en el formulario:</h3>";
            echo $errores;
        }
    }
    ?>

