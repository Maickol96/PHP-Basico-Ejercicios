<?php

/*
 CONDICIONALES

IF:
      if(condicion){
          Intrucciones
        }else{
           otras instrucciones
        }
 */


$color = "rojo";

if ($color == "rojo") {
    echo "El COLOR ES ROJO";
} else {
    echo "El color No es rojo";
}

/*
   OPERADORES DE COMPARACION

==  -> igual =>
=== -> Identico => debe ser un dato exacto
!=  -> Diferente
<>  -> Diferente
!== -> No identico
<   -> Menor que
>   -> Mayor que
<=  -> Menor o igual que
>=  -> Mayo o igual que

 * */
echo "<br>";
$year = 2020;

if ($year == 2019) {
    echo "Estamos en 2019";
} else {
    echo "No estamos en 2019";
}

echo "<br>";
if ($year < 2019) {
    echo "Es menor a 2019";
} else {
    echo "Es mayor a 2019";
}

echo "<br>";

if ($year >= 2019) {
    echo "Estamos de 2019 en adelante";
} else {
    echo "Es u anio anterior a 2019";
}

//Ejemplo 3

$nombre = "David perez";
$ciudad = "Barbosa";
$continente = "Asia";
$edad = 15;
$Mayoria_edad = 18;

if ($edad >= $Mayoria_edad) {
    echo "<h1>$nombre   es mayor de edad</h1>";

    if ($continente == "Latino America") {

        echo "<h2> y es de $ciudad</h2>";
    } else {

        echo "<h2> no es de Latino America es de $$continente</h2>";
    }

} else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}

//Ejemplo 4
//ELSE IF
echo "<hr>";
$dia = 7;

if ($dia == 1) {
    echo "Es lunes";
} else {
    if ($dia == 2) {
        echo "Es martes";
    } else {
        if ($dia == 3) {
            echo "Es miercoles";
        } else {
            if ($dia == 4) {
                echo "Es jueves";
            } else {
                if ($dia == 5) {
                    echo "Es viernes";
                } else {
                }
                echo "Es fin de semana";
            }
        }
    }
}

echo "<hr>";
//Lo mismo que el ejemplo anterior pero escrito con ELSE IF.
if ($dia == 1) {
    echo "LUNES";
} elseif ($dia == 2) {
    echo "MARTES";
} elseif ($dia == 3) {
    echo "MIERCOLES";
} elseif ($dia == 4) {
    echo "JUEVES";
} elseif ($dia == 5) {
    echo "VIERNES";
} else {
    echo "FIN DE SEMANA";
}

//Ejemplo 5
//Queremos comprobar si un numero esta dentro de una edad u otra.
echo "<hr>";
$edad1 = 18;
$edad2 = 64;
$edad_oficial =5;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2 ){
    echo "ESTA EN EDAD DE TRABAJAR";
}else{
    echo "NO ESTA EN EDAD DE TRABAJAR";
}

/*
 Operadores Logicos

&& -> AND / Y
|| -> OR / O
! -> NOT / NO
and, or

 */

//Ejemplo 6
echo "<hr>";
$pais ="peru";

if ($pais == "mexico" || $pais == "colombia" || $pais == "España") {
    echo "En este pais se habla español";
}else {
    echo "No se habla español en este Pais";
}

//SWICH
//Otra forma de solucionar el ejemplo 4.

echo "<hr>";
$dia = 7;

switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
}
//Ejemplo
//Goto
echo "<hr>";

goto marca;

echo "<h3>Instruccion 1 </h3>";
echo "<h3>Instruccion 2 </h3>";

marca:
echo "me he saltado 2 echos";

echo "<h3>Instruccion 3 </h3>";
echo "<h3>Instruccion 4 </h3>";


?>
