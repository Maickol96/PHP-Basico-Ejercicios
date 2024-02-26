<?php
/*
 Escribir un programa con PHP que agregue valores a un array mientras que su logitud sea menor
a 120, y luego mostrarlo por pantalla */


//Añadir elementos a un array

$coleccion = array ();

for ($i = 0; $i <= 120; $i++) {
    array_push($coleccion, "Elemento-" . $i);// de esta manera se agregan los 120 numeros,  array_push(array, "Mensaje", y el contador $i);
}
    var_dump($coleccion);
    echo $coleccion[5];// de esta menra para imprimir u numero en espesifico






?>
