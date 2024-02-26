<?php
//variables superglobales

//Variables Servidor
//para sacar la direction IP de mi local
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '<h1>';

//Para sacar el nombre del servidor
echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '<h1>';

//software que usa el servidor
echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '<h1>';

//Me saca el navegador web po donde estoy accediendo a esta pagina web
echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<h1>';

//Direccion que tiene l cliente
echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];
echo '<h1>';

?>
