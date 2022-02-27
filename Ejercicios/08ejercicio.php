<h2>Ejercicio 8</h2>
<?php

/*Escriba un programa que calcule el factorial de un número  
que se le pase en un parámetro GET por la URL.*/

$factorial = 1;

if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
    $numero = $_GET["numero"];
    for ($i = 1; $i <= $numero; $i++) {
        $factorial = $i * $factorial;
    }
    echo "El factorial de " . $numero . " es " . $factorial;
} else {
    echo "Inserte un entero en la URL con el formato \"08ejercicio.php?numero=X\". </br>";
}



?>