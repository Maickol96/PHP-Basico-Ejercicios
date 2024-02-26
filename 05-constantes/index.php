<?php
//Constante
//contenedor de informacion que no puede variar
//constante
define ('nombre', 'victor robles'); // de esta manera se crean las variables

define ('web','victorrobles.es');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//Variable
$web ="victor robles.es/academy";
$web = "victorroblesweb.es/cursos";
echo '<h1>'. $web . '</h1>';


//constantes predefinidas


echo PHP_OS; //Imprime sistema operativo donde estamos trabajando
echo PHP_EXTENSION_DIR; // Nos da la ruta de nuestro php




?>
