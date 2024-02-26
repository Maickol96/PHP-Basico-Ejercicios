<?php
/*EJERCICO 6
Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
*/
echo "<table border ='1'> <tr>";// inicio de la tabla

echo "<tr>";//inicio fila 1 de celdas

for ($cabecera = 1; $cabecera <= 10; $cabecera++) {
    echo "<td>Tabla del $cabecera</td>";
}


echo "</tr>";// cierre fila 1 de celdas
echo "<tr>";//inicio fila 2 de celdas

for ($i = 1; $i <= 10; $i++) { // Bucle nos pinta las celdas
    echo "<td>";
    for ($x = 1; $x <= 10; $x++) { // nos llena el contenide de las celdas

        echo "$i x $x = " . ($i * $x) . "<br>";
    }

    echo "</td>";
}


echo "</tr>";//inicio fila 2 de celdas


echo "</table>"; // fin de la tabla

echo "<hr>";

//***************************************************************************************
// tablas del 10 al 20

// 1. => Se crea la tabla


echo "<table border='1'> <tr>";//INICIO DE LA TABLA
for ($tabla = 11; $tabla <= 20; $tabla++) {//para poner el titulo a la tabla
    echo "<td>Tabla del $tabla</td>";
}
echo "<tr>";//INICIO CELDA 1

for ($m = 11; $m <= 20; $m++ ){
    echo "<td>";//PARA IMPRIMIR LAS CELDAS
    for ($a = 11; $a <= 20; $a++){

        echo "$m x $a = ". ($m*$a)."<br>";
    }
    echo "</td>";//PARA IMPRIMIR LAS CELDAS
}


echo "</tr>";//FIN CELDA 1
echo "<tr>";//INICIO CELDA 2



echo "</tr>";//FIN CELDA 2
echo "</table>";
?>