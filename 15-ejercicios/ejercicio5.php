<?php
/*
Ejercico 5 => crear un array con el contenido de la siguiente tabla:
ACCION  AVENTURA  DEPORTES
GTA    ASSASINS  FIFA1 9
COD     CRASH    PES 19
PUBG    Prince   MOTO GP 19

Cada columna debe ir en un 20-fichero separado(includes)
*/

$tabla = array(
    //Des esta manera se crea un array asociativo
    "ACCION" => array("GTA", "COD", "PUBG"),
    "AVENTURA" => array("ASSASINS", "CRASH", "Pirnce of persia"),
    "DEPORTE" => array("FIFA 19", "PES 10", "MOTO GP 19")
);
//creamos una variable don solo nos muestra los indices del array  array_keys($tabla)
$categorias = array_keys($tabla);
var_dump($tabla);
?>
<!--pintamos la tabla html-->

<table border="1">
<!--Llamos el encabezado por medio del include del 20-fichero encabezado-->

   <?php require_once 'ejercicio5/encabezado.php';?>
    <!--Llamamos el cada una de las filas usando required_once 'nombreCarpeta/nombreFile'-->
   <?php require_once 'ejercicio5/primeraFila.php';?>
   <?php require_once 'ejercicio5/segundaFila.php';?>
   <?php require_once 'ejercicio5/terceraFila.php';?>




</table>