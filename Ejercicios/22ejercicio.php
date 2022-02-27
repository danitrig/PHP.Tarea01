<h2>Ejercicio 22</h2>
<?php

/*Implemente la función filter_var para comprobar 
si el email que nos llega por la URL es un email valido.*/

$email = "";
if (isset($_GET["email"])) {
    $email = $_GET["email"];
}

function validarEmail($email)
{
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "Válido";
    } else {
        $status = "No Válido";
    }
    return $status;
}

echo validarEmail($email);

?>