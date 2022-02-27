<h2>Ejercicio 17</h2>
<?php

/*Implemente un script PHP que defina tres variables, una tipo array,
 otra tipo string y otra boleana,  que imprima un mensaje indicando el 
 tipo de variable del que sea cada una de ellas.*/

$variableTexto = "Hola";
$variableArray = array(1, 2, 3);
$variableVerdad = true;

if (is_string($variableTexto)) {
    echo "variableTexto es un String</br>";
}
if (is_bool($variableVerdad)) {
    echo "variableVerdad es un Booleano</br>";
}
if (is_array($variableArray)) {
    echo "variableArray es un Array</br>";
}

?>