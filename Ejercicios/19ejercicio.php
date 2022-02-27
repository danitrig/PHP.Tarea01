<h2>Ejercicio 19</h2>
<form name="factorial" method="post" action="19ejercicio.php">

    Introduce un entero para calcular su factorial: <input type="text" name="numero" value="">

    <input value="Calcular" type="submit" />

</form>
<?php

/*Escriba un programa que calcule el factorial de un número  que se le pase 
mediante un parámetro POST enviado desde un formulario*/

$factorial = 1;

if (isset($_POST["numero"]) && is_numeric($_POST["numero"])) {
    $numero = $_POST["numero"];
    for ($i = 1; $i <= $numero; $i++) {
        $factorial = $i * $factorial;
    }
    echo "El factorial de " . $numero . " es " . $factorial;
} else {
    echo "Inserte un número entero</br>";
}

?>