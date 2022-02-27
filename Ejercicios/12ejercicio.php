<h2>Ejercicio 12</h2>
<?php

/*Implemente un script que tenga un array de 5 números enteros y 
realice las siguientes  operaciones sobre él:
1. Recorrerlo y mostrarlo.
2. Ordenarlo y mostrarlo.
3. Mostrará su longitud.
4. Buscar en el vector.*/

$numeros = array(23, 99, 112, 32, 59);

echo "<h3>1. Recorrer y mostrar Array: </h3>";
foreach ($numeros as $entero) {
    echo $entero . "</br>";
}


echo "<h3>2. Ordenar y mostrar Array: </h3>";
//Función para ordenar. Para hacerlo de forma inversa pondremos RSORT
sort($numeros);
foreach ($numeros as $entero) {
    echo $entero . "</br>";
}


echo "<h3>3. Mostrar su longitud.</h3>";

echo "El número de elementos del array es " . count($numeros) . "</br>";
echo "</br>El número de elementos del array es " . sizeof($numeros) . "</br>";


echo "<h3>4.Buscar en el vector. </h3>";
//Primer parámetro lo que queremos buscar y segundo dónde buscarla
$vector = 59;

if (!array_search($vector, $numeros)) {
    echo "El número " . $vector . " NO está en el Array.</br>";
} else {
    echo "El número " . $vector . " SÍ está en el Array.</br>";
}


?>