<?php
/*
 *Ejercicio 3: escribir un programa que imprima por pantalla los cuadrados, un numero multiplicado por si mismo, de los 40 primeros numeros naturales
 */

$contador = 0;
while ($contador <= 40){
  $cuadrado = $contador*$contador;
    echo"<h3>el cuadrado de $contador es $cuadrado </h3>";
$contador++;
}

// la misma implementacion con el FOR

echo "<hr>";
for ($i = 0; $i <= 40; $i ++){

    $cu4drado = $i * $i;
    echo "<h3>EL CUADRADO DE $i es $cu4drado<h3/>";

}


?>