<?php

/*Ejercicio 1 => Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion de si el
parametro get counter esta a uno o a cero.
 */

//para trabajar con sesiones debemos usar => session_star();

session_start();


if (!isset($_SESSION["numero"])){
    $_SESSION['numero'] = 0;
}
// si $_GET['counter'] existe y es igual a uno, aumente numero
if (isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['numero']++;
}
// si $_GET['counter'] existe y es igual a cero, disminuya numero
if (isset($_GET['counter']) && $_GET['counter']==0){
    $_SESSION['numero']--;
}



?>

<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a><br/>



