<?php
/*
un array es una collection o un conjunto de dates/ valores, bajo un unico nombre.
para acceder a esos valores podemos usar un indice numero o alphanumeric
*/
$peliculas = array('harry photer', 'iron man', 'Spider man','naruto');// definicion de un array
$cantantes = ['diomdez', ' maickol','jose'];// otra forma de definir un array

//Array asociativo
$personas = array(// otra forma de definir una array y poner sau valores
    'nombre' => 'maickol',
    'apellido' => 'velasco',
    'web' => 'maickol.es'

);

var_dump($personas);
echo $personas['nombre'];//para imprimir un dato en espesifico


//para saber la posicion de mi array le hago un Var_dump(variable) => y me da la posicion

echo var_dump($peliculas);
 echo "<br>";
 echo "<hr>";

echo $peliculas['0'];// para imprimir un dato esepsisfico de el array
echo "<br>";
echo "<hr>";


echo $cantantes['2'];//  para imprimir un dato esepsisfico de el array


echo "<br>";
echo "<hr>";
//Recorrer o mostrar todos los datos de un array
//Recorrer con FOR
echo "<h1>Listado de peliculas</h1>";


echo "<ul>";

for ($i = 0; $i < count($peliculas); $i++){// Para recorrer una lista  count(variable/array) para que me la recorra toda.
    echo "<li>".$peliculas[$i]."</li>";

}
echo "</ul>";

echo "<br>";
echo "<hr>";


//Otra forma de recorer una lista es utilizando el bucle FOREACH
//Recorrer con FOREACH
echo "<h1>Listado de cantantes</h1>";


//creamos una lista
echo "<ul>";

foreach ($cantantes as $cantante){// Recorreme el array cantantes y por cada iteracion me crea un variable cantante
    echo "<li>".$cantante."</li>";
}

echo "</ul>";
?>