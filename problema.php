<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $ar = fopen("datos.txt", "a") or
    die("Problemas en la creacion");
  fputs($ar, $_POST['nombre']);
  fputs($ar, "\n");
  fputs($ar, $_POST['comentarios']);
  fputs($ar, "\n");
  fputs($ar, "--------------------------------------------------------");
  fputs($ar, "\n");
  fclose($ar);
  echo "Los datos se cargaron correctamente.";
  ?>
</body>

</html>