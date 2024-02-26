<?php
//Operadores aritmeticos

$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicacion: '.($numero1*$numero2).'<br/>';
echo 'Divicion: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>';// para calcular el resto de la divicion

// Operadores incremento y decremento

$year = 2019;

//incremento

//$year = $year + 1;
$year++;

//Decremento
//$year = $year - 1;
$year--;

//Pre-incremento
//$year = 1 + $year;
++$year;

//Pre-decremento
//$year = 1 - $year;
--$year;

echo "<h1> $year </h1>";

//Operadores de asignacion

$edad = 55;

echo $edad.'<br>';

echo ($edad+=5);



?>