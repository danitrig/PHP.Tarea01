<h2>Ejercicio 11</h2>
<?php

/*Un número es bueno si y solo si la suma de sus divisores sin contarse el mismo da ese número. 
Programa que calcule si un número es bueno o no.*/

$numeroPerfecto = 6;
$acumulado = 0;

for ($i = 1; $i < $numeroPerfecto; $i++) {
    if ($numeroPerfecto % $i == 0) {
        $acumulado = $i + $acumulado;
    }
}

if ($acumulado == $numeroPerfecto) {
    echo "El número " . $numeroPerfecto . " SÍ es un número perfecto.";
} else {
    echo "El número " . $numeroPerfecto . " NO es un número perfecto.";
}

?>