<h2>Ejercicio 4</h2>
<?php

//Ejercicio 4. Escriba un programa que multiplique los 20 primeros números naturales.

$resultado = 1;
$numero = 2;

while ($numero <= 20) {

    echo $resultado." * ".$numero." = ";
    $resultado = $numero * $resultado;
    echo $resultado."</br>";
    $numero++;
}

echo "El resultado de multiplicar los primeros 20 números naturales es " . $resultado;

?>