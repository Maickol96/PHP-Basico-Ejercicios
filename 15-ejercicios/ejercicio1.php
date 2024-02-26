<?php
/*
 * EJERCICIO 1
Hacer un programa em php, que tenga un array con 8 numero enteros y que haga lo siguiente.
1 => tiene que recorrerlo y mostrarlo
2 => ordenarlo y mostrarlo
3 => mostrar su longitud
4 => buscar un elemento de array
*/


//1 => tiene que recorrerlo y mostrarlo
echo "<h3> * EJERCICIO 1<br>
Hacer un programa em php, que tenga un array con 8 numero enteros y que haga lo siguiente.<br>
1 => tiene que recorrerlo y mostrarlo<br>
2 => ordenarlo y mostrarlo<br>
3 => mostrar su lo ngitud<br>
4 => buscar un elemento de array</h3>";

// crea funcion

function mostrarArray($numeros){
    $resultado = "";

    foreach ($numeros as $numero) {
        //$resultado = $resultado.$numero."<br/>";
        $resultado .= $numero."<br/>";
    }
    return $resultado;
}

//1 => tiene que recorrerlo y mostrarlo

echo "<h1>1 => tiene que recorrerlo y mostrarlo</h1>";
$numeros = [52, 5, 8, 4, 3, 9, 12, 7];

echo mostrarArray($numeros);
echo "<hr>";





//2 => ordenarlo y mostrarl
echo "<h1>2 => ordenarlo y mostrarlo</h1>";

 sort($numeros);
echo mostrarArray($numeros);



echo "<hr>";
//3 => mostrar su lo ngitud
echo "<h1>3 => mostrar su longitud</h1>";
echo "<br>";

 echo count($numeros);





//4 => buscar un elemento de array
echo "<hr>";

$buscarNumero = 52;
echo "<h1>buscar un elemento de array $buscarNumero</h1>";

$search = array_search($buscarNumero, $numeros);

  if (!empty($search)){
      echo "<h4>El numero buscado existe en el array, en el indice $search</h4>";
  }else{
      echo "No existe el numero bsscado";
  }

    ?>