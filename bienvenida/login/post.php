<?php
//post.php
if(isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    if($usuario == "francisca"&& $contrasena == "pollo frito"){
       // echo "<h1>Bienvenido $usuario</h1>";
       header("location:bienvenida.php?usuario=$usuario");
    }else{
        header("location:login.php?usuario=$usuario");  
        echo "<h1>$usuario no existe o la contrasena es ivalida!</h1>";
    }
}
else{
    
    
    echo "No se envio el formulario";
}
?>