<h2>Ejercicio 2</h2>
<?php
/* Ejercicio 2. Escriba un programa que imprima por pantalla los cuadrados 
 * (el número multiplicado por sí mismo) de los 30 primeros números naturales.
 */

$resultado = 0;

for ($i = 1; $i <= 30; $i++) {

	$resultado = $i * $i;
	echo $i . " al cuadrado es igual a " . $resultado . "</br>";
}

echo "</br><hr/> FIN DE LOS 30 PRIMEROS CUADRADOS"
?>