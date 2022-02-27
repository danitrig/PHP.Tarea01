<h2>Ejercicio 5</h2>
<?php

/*Imprima por pantalla la tabla de multiplicar del
 número pasado en un parámetro GET por la URL*/

if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
    $numero = $_GET["numero"];
} else {
    $numero= 0;
    echo "Mostrando valor por defecto, inserte un valor válido. </br>";
}

echo "TABLA DEL " . $numero . "</br><hr/>";

for ($i = 0; $i <= 10; $i++) {
    echo $i . " x " . $numero . " = " . ($i * $numero) . "</br>";
}

?>