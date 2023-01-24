<?php
    if(isset($_GET['interfaz'])) {
        $interfaz = $_GET['interfaz'];
        /*$apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $genero = $_GET['selectGenero'];
        $pais = $_GET['paises'];
        echo "<p>Nombre : " . $nombre . "</p>";
        echo "<p>Apellido : " . $apellido . "</p>";
        echo "<p>Edad : " . $edad . "</p>";
        echo "<p>Genero : " . $genero. "</p>";
        echo "<p>Pais  : " . $pais. "</p>";
        echo "Interes General : ";*/
        
        //echo $path ;
        echo "<p>Interfaz : " . $interfaz . "</p>";
        if ($interfaz == 'all'){
            exec('/home/osboxes/script/pruebas.sh');
            //echo "all";
        }else{
            $path = "/home/osboxes/script/pruebas.sh ". $interfaz;
            exec('$path');
            echo $path;
        }
        /*foreach($_GET['intereses'] as $select){
            echo ("<p> ".$select ." </p>");
        }*/
    }
?>