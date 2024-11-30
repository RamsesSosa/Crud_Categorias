<?php
// include: Importar clase desde la misma carpeta
include_once("estudiantes.php");

//Se usa new pasa instanciar un objeto de la clase estudiante
$juanita = new estudiante();
$juanita->nombre = "Juanita Rubio Smith";
$juanita->edad = 21;
$juanita->carrera = "ISW";
$juanita->correo = "juanita12@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion alumno</h1>
    <h1> <?= $juanita->informacion();?></h1>
</body>
</html>