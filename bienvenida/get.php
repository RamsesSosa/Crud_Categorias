<?php
//GET
//POST
/*-------- RUTA ----------
protocolo:// dominio / carpeta(s) / archivo.php
http:// localhost / bienvenida /get.php
*/
/*
                        ruta         ? variable = valor & variable2 = valor2
http://localhost\bienvenida/hola.php ? nombre   = Arturo & edad     =  32

*/

// isset() -> Regresa true o flase si existe o no cualquier variable

if(isset ($_GET ["nombre"]) && isset ($_GET ["numero"])){
    $nombre = $_GET ["nombre"];
    $numero = $_GET ["numero"];

    echo "<h1 >Hola $nombre<h1>";

    if ($numero >=18){
        echo "<h1>Tienes $numero años y eres mayor de edad<h1>";
    }
    else{
        echo "<h1> Tienes $numero años y eres menor de edad</h1>";
    } 
  
//echo "<h1> $nombre </h1>";
}else{
    echo "<h1>No enviaste nombre o edad</h1>";
}
?>
