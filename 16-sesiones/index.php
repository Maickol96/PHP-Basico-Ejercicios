<?php
/*
 Sesion: Almacenar y persistir datos del ususario mietras que navega en un sitio
web hasta que cierra sesion o cierra el navegador
*/

//Iniciar sesio
session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";

//Varaible de sesion
$_SESSION['variable_persistente'] = "HOLA SOY UNA VARIABLE ACTIVA";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente']."<br>";