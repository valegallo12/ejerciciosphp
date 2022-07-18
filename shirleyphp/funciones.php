<?php

    function saludarNombre(){
        echo "Hola Shirley";
    }

    function saludar(){
        echo "Hola ...";
    }

    function despedir($nombre, $apellido){
        echo "Adios " . $nombre. " ". $apellido;
    }


    saludar();
    saludarNombre();
    echo "<br>";
    despedir("Shirley","Gallo");



?>


