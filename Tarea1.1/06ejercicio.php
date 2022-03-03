<h2>Ejercicio 6</h2>
<?php

/*Ejercicio 6. Cree un array llamado meses y que almacene el nombre de los doce 
 * meses del año. Recórralo con un bucle FOR para mostrar por pantalla los doce nombres.
*/


$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
"Agosto","Septiembre","Octubre","Noviembre","Diciembre");

for ($i = 0; $i < count($meses); $i++) {
    echo $meses[$i]."</br>";  
}

?>