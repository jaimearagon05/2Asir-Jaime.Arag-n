
    
    <?php
    // dado 7 valores con las cajas de textos de tipo number visualizar aquellos valores en el backend que sean superiorees a la media del 7 
    if (!isset($_POST['enviar'])) {
    ?>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 numeros</title>
</head>
<body>
    <h2>7 numeros</h2>
        <form method="POST" action="">
            <label for="numero">Ingrese los 7 numeritos:</label><br>
            <input type="number" name="numero1"><br>
            <input type="number" name="numero2"><br>
            <input type="number" name="numero3"><br>
            <input type="number" name="numero4"><br>
            <input type="number" name="numero5"><br>
            <input type="number" name="numero6"><br>
            <input type="number" name="numero7"><br>
            <input type="submit" name="enviar" value="Calcular">
        </form>
        </body>
</html>
    <?php
    }
    $media = Media ();
     Visualizar ($media);

    function Media (){
        $acum = 0;
        for ($i = 1; $i <= 7; $i++){
            $acum += $_POST["numero" .$i];
        }
        return $acum / 7;
    }
    function Visualizar ($media){
        for ($i = 1; $i <= 7; $i++){
if ($_POST["numero" .$i] > $media) {
    echo $_POST["numero" .$i];
} 
    }
}
    ?>
