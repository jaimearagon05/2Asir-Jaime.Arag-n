<?php
$personas = [
    "e" => [
        "nombre" => "Juan",
        "edad" => 28,
        "ciudad" => "Madrid"
    ],
    "e" => [
        "nombre" => "Ana",
        "edad" => 22,
        "ciudad" => "Barcelona"
    ],
    "e" => [
        "nombre" => "Carlos",
        "edad" => 35,
        "ciudad" => "Valencia"
    ]
];

foreach ($personas => $numero ) {
    echo "Numeración: " . $numero . "<br>";
    echo "Nombre: " . $persona["nombre"] . "<br>";
    echo "Edad: " . $persona["edad"] . "<br>";
    echo "Ciudad: " . $persona["ciudad"] . "<br>";
}
?>
 foreach ($numeroAlumnos as $nivel => $idiomas) {
        foreach ($idiomas as $idioma => $cantidad) {
            echo "<p>En el nivel <b>$nivel</b>, idioma <b>$idioma</b>, hay <b>$cantidad</b> alumno(s).</p>";
        }
    }