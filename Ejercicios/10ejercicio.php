<?php if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
    # code...
?>
    <h2>Ejercicio 10. Múltiplos de <?= $_GET["numero"]; ?></h2>
<?php

    /*Muestre los números múltiplos de un número pasado por la URL que 
  hay del 1 al 100.*/


    for ($i = 1; $i <= 100; $i++) {
        if (isset($_GET["numero"]) && $i % $_GET["numero"] == 0) {
            echo $i . " es múltiplo de " . $_GET["numero"] . "</br>";
        }
    }
} else {
    echo "Inserte un valor válido en la URL.";
}

?>