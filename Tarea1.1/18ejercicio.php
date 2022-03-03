<h2>Ejercicio 18</h2>
<?php

/*Ejercicio 18. Implemente un array con el contenido de la siguiente tabla:
Frutas	Deportes	Idiomas
Manzana	Futbol	Español
Naranja	Tenis	Inglés
Sandia	Baloncesto	Francés
Fresa	Beisbol	Italiano
Recórralo y muestre el contenido del array en una la tabla striped HTML*/

$tabla = array(
    "Frutas" => array("Manzana", "Naranja", "Sandia", "Fresa"),
    "Deportes" => array("Futbol", "Tenis", "Baloncesto", "Beisbol"),
    "Idiomas" => array("Español", "Inglés", "Francés", "Italiano")
);

//Mostramos de forma simple el Array con var_dump

//var_dump($tabla);

?>
<table border=1>
    <tr>
        <th>Frutas</th>
        <th>Deportes</th>
        <th>Idiomas</th>
    </tr>
    <tr>
        <td><?= $tabla["Frutas"][0] ?></td>
        <td><?= $tabla["Deportes"][0] ?></td>
        <td><?= $tabla["Idiomas"][0] ?></td>
    </tr>
    <tr>
        <td><?= $tabla["Frutas"][1] ?></td>
        <td><?= $tabla["Deportes"][1] ?></td>
        <td><?= $tabla["Idiomas"][1] ?></td>
    </tr>
    <tr>
        <td><?= $tabla["Frutas"][2] ?></td>
        <td><?= $tabla["Deportes"][2] ?></td>
        <td><?= $tabla["Idiomas"][2] ?></td>
    </tr>
    <tr>
        <td><?= $tabla["Frutas"][3] ?></td>
        <td><?= $tabla["Deportes"][3] ?></td>
        <td><?= $tabla["Idiomas"][3] ?></td>
    </tr>
</table>