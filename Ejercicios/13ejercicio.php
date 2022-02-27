<h2>Ejercicio 13</h2>
<?php

/*Implemente un script que muestre la dirección IP del usuario que visita nuestra web 
y, si usa Chrome, darle la enhorabuena.*/

$ip = $_SERVER["REMOTE_ADDR"];
$navegador = $_SERVER["HTTP_USER_AGENT"];

echo "Tu IP es " . $ip . "</br>";

if (strstr($navegador, "Chrome") == true) {
    echo "ENHORABUENA POR USAR CHROME";
} else {
    echo "No usas CHROME ";
}

?>