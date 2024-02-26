<?php
/*
 Para mostrar el valor de las cookies, tengo que usar $_COOKIE , una variable super global,
es una array asociativo*/

if (isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe cookie";
}


//Mostrar la cookie year
if (isset($_COOKIE['unYear'])){
    echo "<h1>".$_COOKIE['unYear']."</h1>";
}else {
    echo "No existe la cookie";
}

?>

<a href="crear_cookies.php">Crear mi galletas</a>
<a href="borrar_cookies.php">Borrar mi galletas</a>