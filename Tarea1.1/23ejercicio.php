<h2>Ejercicio 23</h2>
<?php
/* Ejercicio 23. Implemente a una función a la que le pases un número y muestre 
 * por pantalla su tabla de multiplicar. */
$numero = 1;
if (isset($_GET["numero"])) {
	$numero = $_GET["numero"];
}

function tablaMultiplicar($numero) {
	$textoTabla = "";
	for ($i = 1; $i <= 10; $i++) {
		$textoTabla .= $i . " * " . $numero . " = " . ($numero * $i) . "</br>";
	}
	return $textoTabla;
}

echo tablaMultiplicar($numero);
?>