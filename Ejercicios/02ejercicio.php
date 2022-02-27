<h2>Ejercicio 2</h2>
<?php

/*Escriba un programa que imprima por pantalla los cuadrados 
(el número multiplicado por sí mismo) de los 30 primeros 
números naturales.
*/

$resultado;

for ($i = 1; $i <= 30; $i++) {

    $resultado = $i * $i;
    echo $i . " al cuadrado es igual a " . $resultado . "</br>";
}

echo "</br><hr/> FIN DE LOS 30 PRIMEROS CUADRADOS"

?>