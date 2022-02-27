<h2>Ejercicio 14</h2>
<?php

/*Implemente un script que añada valores a un array mientras que su longitud sea menor a 100 y,
 a continuación, muestre la información del array por pantalla.*/

$rellenar = array();

for ($i = 1; $i <= 100; $i++) {
    // Puede usarsse array_push($rellenar, $i);
    $rellenar[] = $i;
}

//var_dump($rellenar);

foreach ($rellenar as $mostrar) {
    echo $mostrar . "</br>";
}

?>