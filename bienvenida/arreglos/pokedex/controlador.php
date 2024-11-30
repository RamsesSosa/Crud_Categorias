<?php

include_once("pokemon.php"); // importamos la clase pokemon
session_start();

$pokemon = new Pokemon($_POST["nombre"],$_POST["tipo"],$_POST["fuerza"],$_POST["dueno"],
$_POST["habilidad"],$_POST["region"],$_POST["evolucion"],$_POST["prevolucion"]);

    // si la lista no existe  la creo como array[]
    if(!isset($_SESSION["lista"])){
        
    }
    // Agrego un pokemon a la lista
    $_SESSION["lista"][] = $pokemon;


//imprime arrays
print_r($_POST);


?>