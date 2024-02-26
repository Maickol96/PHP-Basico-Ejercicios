<?php
/*
=> Variables locales: Son las que se definen dentro de una funcion, y no pueden ser usadas fuera dela funcion,
                        solo estan disponibles dentro. A no ser que hagamos un return

=> Variables globales: Son las que se declaran fuera de la funcion y estan disponibles dentro y
                        fuera de las funciones
*/

//EJemplo

$frase= "Ni los genios son tyan genio, ni los mediocre tan mediocres";

echo $frase;

echo "<hr>";


//ejemplo con funcion
function holaMundo(){

    global $frase;//para poder usar el contenido de la variable frase dentro de esta funcion, debo llamarla con global y nombre de la variable

echo "<h1>$frase</h1>";

$year = 2024;
    echo "<h1>$year</h1>";

return $year;// se agrega retur para poder usar la variable yaer y poderla imprimir

}


 echo holaMundo();

//echo "<h1>$year</h1>"; //la vatiable year solo funcion si esta dentro de la funcion, ya que hay fue definida, si la uso fuera de la funcion me da error