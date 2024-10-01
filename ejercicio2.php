<html>

<head>
  <title>Problema</title>
</head>

<body>

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

  ?>

</body>

</html>