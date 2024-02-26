<?php
/*
 *Programa que compruebe si una variable esta vacia, y si esta vacia rellenarla con texto en misnusculas y mostrarlo en mayusculas y negrilla
 */



$texto = "w";
// primero comprobamos con la funcion empty() si la funcion esta vacia
if (empty($texto)){
    $texto = "Hola yo soy el relleno de la variable texto";
    // Creamos la variable y con strtoupper($texto) la convertimos a mayusculas
    $textoMayuscual = strtoupper($texto);
    //Imprimimos y con la etiqueta <strong> la ponemos en negrilla
    echo "<strong>$textoMayuscual</strong>";
}else{
    echo "la variable tiene este contenido : ".$texto;
}

?>