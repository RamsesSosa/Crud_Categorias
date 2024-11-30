<?php

$usuario = "";
$error = "";

if(isset($_GET["usuario"])){
    $usuario = $_GET["usuario"];
    $error = "$usuario no existe o la contrasena es incorrecta";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    action -> nombre del archivo al que enviaremos la informacion

    method -> forma en la que enviaremos la informacion get o post

    header() -> utilizado para cambiar el encabezado de la peticion al servidor

    location -> redireccionar la peticion
-->
    <h1>LOGIN</h1>
    <h3 style="color:red;"> <?=$error?></h3>
    <form action="post.php" method="post">
    <input 
    type = "text" 
    name="usuario"
    placeholder="Usuario"
    value = <?= $usuario;?>
    >
    <br><br>

    <input
    type="password"
    name = "contrasena"
    placeholder="escribe una contrasena"
    >
    <br><br>
    <button type="submit">Iniciar Sesion </button>

    </form>



</body>
</html>