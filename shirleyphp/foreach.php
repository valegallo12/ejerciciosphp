<?php


    // bucle foreach

    // array
    $array[] = "andres";
    $array[] = "camilo";
    $array[] = "maria";
    $array[] = "sofia";
    $array[] = "juan";

    foreach($array as $value){
        echo $value;
        echo "<br/>";
    }

    foreach($array as $key => $value){
        echo "posicion: " . $key . "el nombre es: ". $value;
        echo "<br/>";
    }

    //recorrer array asociativo, multidimensional 

    //array multidimensional 
    $notas = array(
        '0' => array('materia' => "Ingles", "nombre" => " juan", "nota" => 2.5),
        '1' => array('materia' => "Español", "nombre" => " sonia", "nota" => 4.8),
        '2' => array('materia' => "Matematicas", "nombre" => " Sofia", "nota" => 3.8),
        '3' => array('materia' => "Ingles", "nombre" => " Carlos", "nota" => 3.5),
    );

    echo "----------------------------------------";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    foreach ($notas as $key => $value){
        echo "la materia:" . $value["materia"].  " persona:" . $value["nombre"] . " la nota es:" . $value["nota"];
        echo "<br>";
    }
     
    //condicion if


?>