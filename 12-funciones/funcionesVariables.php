<?php

//funciones variables

function buenosDias(){
return "Hola!! buenos dias";
}

function buenasTarde(){
    return "Hay!! Que tal ha ido la comida";
}

function buenosNoches(){
    return "Te vas a dormir? buenas noches";
}

//se crean las funciones
//otra forma de llamar una funcion desde una variable
$horario = "buenosNoches"; // creo una variable con el nombre de la funcion y luego al imprimir esa variable me muestra lo que tiene esa funcion

 echo $horario();

?>
