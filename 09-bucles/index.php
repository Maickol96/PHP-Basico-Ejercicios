<?php
/*BUCLE WHILE

Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces
como sea necesario, en base a una condicion.

-> Mientras que la condicion se cumpla entrar al bloque de instrucciones, cuando ya no se cumpla salir del while.

while(condicion){
    bloque de instrucciones
    otras instrucciones
}

*/
//Ejemplo: hacer que nuestro programa muestre los numeros de 1 - 100, comprobar si el numero es 100 no imprimir la ,


$numero = 5;
while ($numero <= 100){
   echo $numero;

    if ($numero != 100){
        echo ", ";
    }
    $numero++;
}
echo "<hr>";
//Ejemplo Tabla de multiplicar

if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero = (int)$_GET['numero']; //para que numero que ponemos en la url no lo tome con strin si no como int
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero</h1>";

//iteramos del numero 1 al 10

$contador =0;
while ($contador <= 10){
    echo "$numero x $contador =  " . ($numero*$contador)."<br/>";
    $contador++;
}

var_dump($numero);

echo "<hr>";

/*
DO WHILE

Formato

do{
    //BlOQUE DE INSTRUCCIONES}
}while(//EVALUAMOS LA CONDICION);

*/

//Ejemplo edad de una persona

$edad = 18;
$contador = 1;
do{
echo "Tiene acceos al local privado $contador <br/>";
$contador++;
}while($edad >= 18 & $contador <= 10);


?>
