<?php
/*crear funciones simar, restar, multiplicar y dividir
  que tengan como parametro num1 y num2 e imprima el resultado de la operacion.
*/
function sumar($num1, $num2){
$total = $num1 + $num2;
echo "La suma es: $total <br>";

}

function restar($num1, $num2){
    $total = $num1 - $num2;
    echo "La resta es: $total <br>";
}
function mult($num1, $num2){
    echo "La multiplicacion es: ". ($num1 * $num2);
}
function division($num1, $num2){
    $total = $num1 / $num2;
    echo "<br>La division es: $total <br>";
}

sumar (20, 20);
restar(100, 20);
mult(20,2);
division(100, 2);

?>