<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="listarWireGuardGET.php" method="GET">
        
        <label for="interfazForm"> Interfaz </label>
        </br>
        <input type="radio" id="all" name="interfaz" value="all">Todos</input>

        <input type="radio" id="0" name="interfaz" value="0">Interfaz 0</input>

        <input type="radio" id="1" name="interfaz" value="1">Interfaz 1</input>

        <input type="radio" id="2" name="interfaz" value="2">Interfaz 2</input>

        <input type="radio" id="3" name="interfaz" value="3">Interfaz 3</input>
        </br>        
        <input type="submit">
    </form>
    <?php
    /*    echo ("</br>");
        require_once 'listarWireGuardGET.php';

        echo (" Ejercicio 1 ");
        echo("<ul> <li> Hola Mundo  </li> </ul>");
        // $a = array(1 => 'uno', 2 => 'dos', 3 => 'tres');
        
        echo ("</br>");
        echo (" Ejercicio 2  </br>");
        $arre = array ("Chevrolet","Ford","Fiat","BMW");
        print_r($arre);
        
        $can = count($arre);
        echo ("<ul>");
        for ($i=0; $i<$can; $i++) {                       //foreach ($arre as $car)
            echo ("<li>" . $arre[$i] . "</li>");      // . $car . 
        };
        echo ("</ul>");
        
        echo ("</br>");
        echo (" Ejercicio 3 </br>");
        echo ("</br>");*/
    ?>
</body>
</html>