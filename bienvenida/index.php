<?php

function saludar(){
    echo "Hola mundo";

}
function saludar2($nombre){
    echo "Hola $nombre <br>";

}
function saludar3($nombre = "Mundo"){
    echo "Hola $nombre <br>";
}

function saludar4($nombre, $apellido1, $apellido2 = null){

    echo "Hola $nombre $apellido1 $apellido2 <br>";

}

saludar4("Ramses ", "Villegas ", "Sosa");
saludar4("Maripaz", "Chavez");
saludar3();
saludar3("Pepe");
saludar2 ("Ramses");
saludar();

?>