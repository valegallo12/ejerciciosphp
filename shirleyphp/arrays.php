<?php

// arrays
$array1[] = "posicion 1";
$array1[] = "posicion 2";
$array1[] = "posicion 3";

var_dump($array1);



$array2 = array(
    '0' => 'a',
    '1' => 'b',
    '2' => 'c',
);


var_dump($array2);


//array asociativos
echo "<br/>";
echo "Array asociativos";

$arrayAsociativo = array(
    'materia' => "ingles",
    'nota' => 3.5,
    'nombre' => "Danna ",
    'apellido' => "Gallo",
 );

var_dump($arrayAsociativo);
echo $arrayAsociativo["materia"];


echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



//array multimensional
$notas = array(
    '0' => array('materia' => "Ingles", "nombre" => "juan", "nota" => 2.5),
    '1' => array('materia' => "Ingles", "nombre" => "sonia", "nota" => 4.5),
    '2' => array('materia' => "Ingles", "nombre" => "Sofia", "nota" => 3.5),
    '3' => array('materia' => "Ingles", "nombre" => "Carlos", "nota" => 3.5),
);

var_dump($notas);

echo "Nombre de la nota mas alta:" . $notas[1]["nombre"];

?>