<?php
/*
FUNCIONES: Un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutilizarce solamente invocando a la funcion tantas veces como queramos

ESTRUCTURA

funtion nombreDeMiFuncion($parametros){
    //bloque/Conjunto de intrucciones
}

EJEMPLO DE COMO USAR LA FUNCION

nombreDeMiFuncion($mi_parametro);
*/

// EJEMPLO 1 => Crear una funcion que me imprima 4 cosas por pantalla.

function muestraNombres(){
    echo "Maickol Velasco <br>";
    echo "Dario Velasco <br>";
    echo "Nury Velasco <br>";
    echo "Erika Velasco <br>";
}

muestraNombres(); //lama la funcion





//EJEMPLO 2 => Funcion que genera la tabla de multiplicar de un numero
echo "<hr>";

function tabla($numero){//aca creo la funcion
    echo "<h3> Tabla de multiplicar del $numero </h3>";

    for ($i = 0 ; $i <= 10; $i++ ){
        $operacion = $numero*$i;
    echo "$numero x $i = $operacion<br>";
    }
}

tabla('5');//aca llamo la funcion
echo "<hr>";





tabla("15");;//aca llamo la funcion
echo "<hr>";




 echo "<h1>aca llamo la funcion y logica para meter dato desde la url </h1>";
if (isset($_GET['numero'])) {;//aca llamo la funcion y logica para meter dato desde la url
    tabla($_GET['numero']);
}else{
    echo "No hay numero para sacar la tabla";
}
echo "<hr>";





//For que me muestre todas la tablas de multiplicar

echo "<h1>llamo la funcion para que me saque todas la tabla</h1>";
for ($i = 0; $i <=10; $i++){  //llamo la funcion para que me saque todas la tabla
    tabla($i);
}

echo "<hr>";





//Ejemplo 3 Como pasarle varios parametros a una funcion
echo "<h1>calculadora</h1>";
function calcudora($numero1, $numero2){

    //conjunto de instrucciones a ejecutar

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;

    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicacion: $multiplicacion <br/>";
    echo "Divicion: $divicion <br/>";
    echo "<hr>";

}
calcudora(5, 58);

echo "<hr>";

calcudora(7,96);











?>



