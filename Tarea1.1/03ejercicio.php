<h2>Ejercicio 3</h2>
<?php

/*Ejercicio 3. Modifique el ejercicio anterior para que muestre al lado 
 * de cada cuadrado si es un número par o impar.
*/

$resultado;

for ($i = 1; $i <= 30; $i++) {

    $resultado = $i * $i;

    echo $i . " al cuadrado es igual a " . $resultado;

    if ($i % 2 == 0) {
        echo " y es un número PAR</br>";
    } else {
        echo " y es un número IMPAR</br>";
    }
}

echo "</br><hr/> FIN DE LOS 30 PRIMEROS CUADRADOS"

?>