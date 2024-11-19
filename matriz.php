    <?php
    // ----------------- Programa Principal -----------------
    $mat = array(
        array(10, 23, 56, 1, 34, 78, 2),
        array(-7, 9, 23, 100, 33, 45, 6),
        array(200, 93, 53, 10, -34, 8, 62)
    );

    // ----------- Funciones -------------
    function NumMayor($array) {
        return max($array);
    }

    function NumMenor($array) {
        return min($array);
    }

    function crearMatrizMayorMenor($mat) {
        $nuevaMat = array();
        
        foreach ($mat as $fila) {
            $mayor = NumMayor($fila);
            $menor = NumMenor($fila);
            $nuevaMat[] = array($mayor, $menor); 
        }
        
        return $nuevaMat;
    }

    function VisualizarMatriz($mat) {
        foreach ($mat as $fila) {
            echo 'Mayor: ' . $fila[0] . ', Menor: ' . $fila[1] . '<br>';
        }
    }

    $nuevaMatriz = crearMatrizMayorMenor($mat);

    echo "<h3>Nueva Matriz (Mayor y Menor de cada fila):</h3>";
    VisualizarMatriz($nuevaMatriz);
    ?>