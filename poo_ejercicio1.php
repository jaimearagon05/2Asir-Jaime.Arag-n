<html>
    
<head>
<title>Pruebas</title>
</head>
<body>
<?php
// Declarar un aclase alumno con su nombre y sus tres notas, 
// luego declarar dos objetos alumnos visualizando la media 
// de cada uno de ellos 

class alumno {
  private $nombre;
  private $n1;
  private $n2;
  private $n3;

  public function inicializar($nom, $n1, $n2, $n3)
  {
    $this->nombre=$nom;
    $this->nota1=$n1;
    $this->nota2=$n2;
    $this->nota3=$n3;
  }
 
  public function obtmedia() {
  return  $this->media = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
  
}
public function imprimir()
{
  echo $this->nombre . ": " . $this->obtmedia();
  echo '<br>';
}
}

class profe {
    private $asignatura;
    private $nombre_profe;

    public function ini($nom_prof, $asig)
  {
    $this->nom_profe=$nom_prof;
    $this->asigna=$asig;
  }  

  public function imprim() 
  {
    echo '<br>';
    echo $this->nom_profe . ": " . $this->asigna;
  

  }
}

$per1=new alumno();
$per1->inicializar('Juan',8, 7, 6);
$per1->imprimir();
$per2=new alumno();
$per2->inicializar('Ana', 5, 7, 5);
$per2->imprimir();

$prof1=new profe();
$prof1->ini("alberto", "programacion");
$prof1->imprim();
$prof2=new profe();
$prof2->ini("prieto", "base de datos");
$prof2->imprim();
?>
</body>
</html>


