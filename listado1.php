<html>
<body>
<?php
include "conexion.php";

$seleccionar="select * from tabla_alumnos";
$resultado=mysqli_query($enlace, $seleccionar);
$num_filas=mysqli_num_rows ($resultado);
?>
<table border="1" align="center">
  <tr> 
    <td><font color="#0033CC"> Nombre</font></td>
  
    <td><font color="#0033CC"> Localidad</font></td>
      <td><font color="#0033CC"> Provincia</font></td>
   
    <td><font color="#0033CC"> Nota1</font></td>
        <td><font color="#0033CC"> Nota2</font></td>
            <td><font color="#0033CC"> Nota3</font></td>
  </tr>

  <?php
for ($i=0; $i<$num_filas; $i++){

   $row=mysqli_fetch_assoc ($resultado);
?>
  <tr> 
    <td><font color="#FF3300"><?php echo $row['nombre'];?></font></td>
    
    <td><font color="#FF3300"><?php echo $row['localidad'];?></font></td>
    <td><font color="#FF3300"><?php echo $row['provincia'];?></font></td>
  
    <td><font color="#FF3300"><?php echo $row['nota1'];?></font></td>
    <td><font color="#FF3300"><?php echo $row['nota2'];?></font></td>
    <td><font color="#FF3300"><?php echo $row['nota3'];?></font></td>
  </tr>
  <?php
}
?>
</table>
</body>
</html>
