<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    // imprimir algo
    public function saludar (){
        echo "<h1> hola mundo</h1>";
    }

    public function saludar2 ($nombre){
        echo "<h1> hola $nombre</h1>";
    }

    public function saludar3 ($nombre, $edad){
        echo "Hola $nombre";
        echo ($edad>=18)? "Eres mayor de edad" :"Eres menor de edad";
    }

    public function saludar4 ($numero1, $numero2){
        $resultado = $numero1 + $numero2; 
        echo "el resulatado es: $resultado <br>";
        $resultado = $numero1 - $numero2; 
        echo "el resulatado es: $resultado <br>";
        $resultado = $numero1 / $numero2; 
        echo "el resulatado es: $resultado <br>";
        $resultado = $numero1 * $numero2; 
        echo "el resulatado es: $resultado <br>";
    }

    public function plantilla(){
        return view("plantilla");
    }

}
