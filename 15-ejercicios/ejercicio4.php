<?php
/*
Crea un scrip en  PHP que tenga 4 variables, una tipo array otra tipo string, otra int y otra booleana
y que escriba el mensaje segun el tipo de variable que sea
*/

//Creamos las variables
$matriz = array("hola mundo", 88);
$titulo = "Master en php";
$numero = 77;
$verdadero =true;

// con if comprobamos

if (is_array($matriz)){
    echo "<h1>Es un array</h1><br>";
}
if (is_string($titulo)){
    echo "<h1>Es un string</h1>";
}
if (is_int($numero)){
    echo "<h1>Es un int</h1>";
}
if (is_bool($verdadero)){
    echo "<h1>Es un boleano</h1>";
}

?>
