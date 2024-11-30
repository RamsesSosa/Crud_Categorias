<?php

class Estudiante{
/// Alcance ///
// public -- Se accede desde cualquier lugar
// private -- Solo se accede desde la misma clase
// protected -- desde la musma clase y herencias
// default -- desde la misma carpeta

public $id;
public $nombre;
public $edad;
public $carrera;
public $correo;

fuction informacion(){
    //$this->nombre_variable -- es obligatorio para acceder a las propiedades de la clase
    // $this->edad      $this->$edad <-- error comun (doble$)
    // $this->edad      $this- > edad <-- espacios entre las flechas

    $info = "
        Nombre: $this->nombre <br>
        edad: $this->edad <br>
        carrera: $this->carrera <br>
        correo: $this->correo <br>
    ";
    return $info;
}
}
?>