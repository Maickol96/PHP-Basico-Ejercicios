<?php
/*
Cookies: Es un 20-fichero que se almacena en el ordenador del usuario que visita la web,
con el fin de recordar datos o retraer el comportamiento del mismo en la web.

ESTRUCTURA DE UNA COOKIE
setcookie("nombre","valor que solo puede ser texto",caducidad, ruta, dominio);
*/

//Crear un Cookie
//cookie basica
setcookie("micookie","valor de mi galleta");

//Cookie con expiracion
setcookie("unYear", "valor de mi cookie de 635 dias", time()+(60*60*24*365));

?>


<!--para poder imprimir las cookies-->
<a href="ver_cookie.php">Ver las Galletas</a>
