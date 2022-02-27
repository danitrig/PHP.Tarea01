<h2>Ejercicio 24</h2>
<?php

/*Modifique el ejercicio anterior para pasarle un parámetro opcional que 
nos permita imprimir directamente la tabla en una tabla HTML striped.*/
$numero = 1;
if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
}

function tablaMultiplicar($numero, $html = null)
{
    $textoTabla = "";
   
    for ($i = 1; $i <= 10; $i++) {
        // ponemos .= para concatenar
        $textoTabla .= $i . " * " . $numero . " = " . ($numero * $i) . "</br>";
    }
    if ($html != null) {
        echo "<h3>Tabla del {$numero}</h3>";
        echo $textoTabla;
    }
    return $textoTabla;
}

tablaMultiplicar($numero, true);

?>