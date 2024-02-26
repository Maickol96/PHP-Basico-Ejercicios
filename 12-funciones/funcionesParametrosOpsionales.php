<?php

//EJEMEPLO 4 PARAMETROS OPCIONALES

//Ejemplo 3 Como pasarle varios parametros a una funcion
echo "<h1>Calculadora con un parametro opcional</h1>";
function calcudora2($numero1, $numero2, $negrita = false){

    //conjunto de instrucciones a ejecutar

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;

    //parametro 3 opcional valida en el if y se pone en negrita.

    if ($negrita){ // tambien se puede usar $negrita (!= false), ya que por defecto siempre va a ser true si no se pone ningun parametro adicional
        echo "<h1>";
    }

    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicacion: $multiplicacion <br/>";
    echo "Divicion: $divicion <br/>";

    if ($negrita ){
        echo "</h1>";


    }
    echo "<hr>";



}
calcudora2(5,23,true);
calcudora2(5,52);

?>
