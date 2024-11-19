<?php
/*
session_start();

$nombre=$_SESSION['nombre'];
$direccion=$_SESSION['direccion'];
$localidad=$_SESSION['localidad'];
$genero=$_SESSION['genero'];
$nota=$_SESSION['nota'];
*/

$nombre=$_POST['nombre'];
$localidad=$_POST['localidad'];
$provincia=$_POST['provincia'];


$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];


include "conexion.php";



 $sql = "INSERT INTO tabla_alumnos (nombre, localidad, provincia, nota1, nota2, nota3)
 VALUES ('".$nombre."','".$localidad."','".$provincia."','".$nota1."','".$nota2."','".$nota3."')";
 
if (!mysqli_query($enlace, $sql)) {
     
      echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
} else{
    echo "Información correctamente grabada";
}   


 $enlace->close();
   




?>