<h2>Ejercicio 9</h2>
<?php
//Ejercicio 9. Muestre todos los números pares que existan entre el 1 y el 100.

echo "Los números pares del 1 al 100 son: </br>";

for ($i = 1; $i <= 100; $i++) {
	if ($i % 2 == 0) {
		echo $i . "</br>";
	}
}
?>