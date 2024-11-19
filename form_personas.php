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

    <!-- Formulario -->
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
            <option value="no se dicen esas cositas">señorita</option>

        </select><br><br>
        <label for="peso">Peso:</label><br>
        <select id="peso" name="peso">
            <option value="">Suerte</option>
            <option value="Barbie">50-55</option>
            <option value="medio warzone">55-65</option>
            <option value="warzone">65-72</option>
            <option value="mas que un warzone">72-80</option>
            <option value="termotanque">80-100</option>
            <option value="La hiroshima">+100</option>

        </select><br><br>

        <label for="sexo">Sexo:</label><br>
        <input type="radio" id="hombre" name="sexo" value="Hombre">
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer">
        <label for="mujer">Mujer</label>
        <input type="radio" id="no identificado" name="sexo" value="Helicoptero de combate">
        <label for="no identificado">no binario</label><br><br>

        <label for="estado_civil">Estado Civil:</label><br>
        <input type="radio" id="soltero" name="estado_civil" value="Soltero">
        <label for="soltero">Soltero</label>
        <input type="radio" id="casado" name="estado_civil" value="Casado">
        <label for="casado">Casado</label>
        <input type="radio" id="otro" name="estado_civil" value="Otro">
        <label for="otro">Otro</label>
        <input type="radio" id="cornudo" name="estado_civil" value="cornudo">
        <label for="cornudo">pa los valientes</label><br><br>

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
        <input type="checkbox" id="felador" name="aficiones[]" value="felador de pitos masculinos por dinero">
        <label for="felador">Jueguecitos</label>
        <input type="checkbox" id="television" name="aficiones[]" value="Televisión">
        <label for="television">Televisión</label><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
    </body>
    </html>
    <?php
}
    // Procesar el formulario si se ha enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los datos
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellidos = htmlspecialchars($_POST['apellidos']);
        $edad = htmlspecialchars($_POST['edad']);
        $peso = htmlspecialchars($_POST['peso']);
        $sexo = htmlspecialchars($_POST['sexo']);
        $estado_civil = htmlspecialchars($_POST['estado_civil']);
        $aficiones = isset($_POST['aficiones']) ? $_POST['aficiones'] : [];

        // Mostrar los datos recibidos
        echo "<h3>Datos recibidos:</h3>";
        echo "Nombre: $nombre<br>";
        echo "Apellidos: $apellidos<br>";
        echo "Edad: $edad<br>";
        echo "Peso: $peso<br>";
        echo "Sexo: $sexo<br>";
        echo "Estado Civil: $estado_civil<br>";
        echo "Aficiones: " . implode(", ", $aficiones) . "<br>";
    }
    ?>

