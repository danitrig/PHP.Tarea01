<h2>Ejercicio 24</h2>
<?php
/* Ejercicio 24. Modifique el ejercicio anterior para pasarle un parámetro opcional 
 * que nos permita imprimir directamente la tabla en una tabla HTML striped. */
$numero = 1;
if (isset($_GET["numero"])) {
	$numero = $_GET["numero"];
}

function tablaMultiplicar($numero, $html = null) {
	$textoTabla = "";
	$textoArray = array();

	for ($i = 1; $i <= 10; $i++) {
		$textoTabla = $i . " * " . $numero . " = " . ($numero * $i) . "</br>";
		$textoArray[] = $textoTabla;
	}
	if ($html != null) {
		echo "<table border=2>";
		echo "<tr><th>Tabla del {$numero}</tr></th>";
		foreach ($textoArray as $multiplicacion) {
			echo "<tr><td>{$multiplicacion}</td></tr>";
		}
		echo "</table>";
	}
	return $textoArray;
}

tablaMultiplicar($numero, true);
?>