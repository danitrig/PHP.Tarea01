<h2>Ejercicio 16</h2>
<?php

/*Implemente un script que compruebe si una variable está vacía y, si lo estuviera, 
asígnele texto en minúsculas y muéstrelo convertido a mayúsculas en negrita.*/

$vacia;

if (empty($vacio)) {
    $vacio = strtoupper("RELLENANDO VARIABLE");
    echo "<strong>{$vacio}</strong>";
} else {
    echo "La variable no está vacía";
}

?>