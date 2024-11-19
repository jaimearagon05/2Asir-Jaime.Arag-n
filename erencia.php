<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Persona {
  protected $nombre;

  public function introducirNombre($nom) {
    $this->nombre = $nom;
  }

  public function visualizarNombre() {
    echo $this->nombre . "<br>";
  }
}

class Alumno extends Persona {
  private $nota1;
  private $nota2;
  private $nota3;

  public function inicializar($nom, $n1, $n2, $n3) {
    $this->nombre = $nom;
    $this->nota1 = $n1;
    $this->nota2 = $n2;
    $this->nota3 = $n3;
  }

  public function obtMedia() {
    return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
  }

  public function imprimir() {
    echo $this->nombre . ": " . $this->obtMedia() . "<br>" ;
  }
}

class Profesor extends Persona {
  private $asignatura;

  public function inicializar($nom_profe, $asig) {
    $this->nombre = $nom_profe;
    $this->asignatura = $asig;
  }

  public function imprimir() {
    echo $this->nombre . ": " . $this->asignatura . "<br>";
  }
}

$alumno1 = new Alumno();
$alumno1->inicializar('Juan', 8, 7, 6);
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->inicializar('Ana', 5, 7, 5);
$alumno2->imprimir();

$profesor1 = new Profesor();
$profesor1->inicializar("Alberto", "Programación");
$profesor1->imprimir();

$profesor2 = new Profesor();
$profesor2->inicializar("Prieto", "Base de Datos");
$profesor2->imprimir();
?>
</body>
</html>
