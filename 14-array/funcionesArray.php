<?php


$cantantes = ['diomdez', 'maickol','jose', 'alfredo'];// otra forma de definir un array
$numeros = [1,4,5,7,4,3,7,78,5,4,5,56,5,54,65,5];

echo "<h1>Para ordenar el string de los array en orden alfabetico</h1>";
//Para ordenar el string de los array en orden alfabetico
asort($cantantes);
var_dump($cantantes);


echo "<h1>Para ordenar los numeros de el array en orden de menor a mayor</h1>";
//Para ordenar los numeros de el array en orden de menor a mayor
asort($numeros);
var_dump($numeros);



echo "<h1>Para ordenar los numeros de el array en orden de mayor a menor</h1>";
//Para ordenar los numeros de el array en orden de mayor a menor
arsort($numeros);
var_dump($numeros);


echo "<h1>Para ordenar el string de los array en orden alfabetico pero inverso</h1>";
//Para ordenar el string de los array en orden alfabetico pero inverso
arsort($cantantes);
var_dump($cantantes);


//Añadir elementos a un array
echo "<h1>Añadir elementos a un array</h1>";
$cantantes[] = 'rbo';
var_dump($cantantes);


//Agregar datos al array con array_push
echo "<h1>Agregar datos al array con array_push</h1>";
array_push($cantantes,'melos');
var_dump($cantantes);


//Eliminar un dato del array con array_pop
echo "<h1>Eliminar un dato del array con array_pop</h1>";
array_pop($cantantes);
unset($cantantes[2]);// se usa para indicar la posicion del dato a borrar
var_dump($cantantes);


//Sacar un elemento aleatorio de una array con array_rand y imprimirlo
echo "<h1>Sacar un elemento aleatorio de una array</h1>";
$indice =  array_rand($cantantes);
echo $cantantes[$indice];


//Darle la vuelta a un array, es decir un reverce
echo "<h1>Darle la vuelta a un array, es decir un reverce </h1>";
array_reverse($numeros);
var_dump($numeros);


//Buscar dentro de un array
echo "<h1>Buscar dentro de un array</h1>";
$resultado = array_search('maickol', $cantantes);// nos da la posicion
var_dump($resultado);


//Contar numero de elementos de un array
echo "<h1>Contar numero de elementos de un array</h1>";
echo count($cantantes);
echo "<br>";
echo "Existen '". sizeof($cantantes) ."' elementos en el array de cantantes";//me permite hacer lo mismo que count

?>
