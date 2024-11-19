suma2.0
<?php

if (!isset ($_POST["enviar"])) {?>

<!DOCTYPE html>
<html>

<head>
  <title>Problema</title>
</head>

<body>

  <form action="ejercicio2.php" method="post">
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <input type="radio" name="radio1" value="suma">sumar
    <br>
    <input type="radio" name="radio1" value="resta">restar
    <br>
    <input type="submit" name="operar">
  </form>

</body>

</html>

  <?php
  if ($_POST['radio1'] == "suma") {
    $suma = $_POST['valor1'] + $_POST['valor2'];
    echo "La suma es:" . $suma;
  } else {
    if ($_POST['radio1'] == "resta") {
      $resta = $_POST['valor1'] - $_POST['valor2'];
      echo "La resta es:" . $resta;
    }
  }

}?>
