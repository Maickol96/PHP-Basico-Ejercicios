<?php

//borrar una cookie con unseet
if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    //para borrar una cookie debemos caducarla, se pasa nombre de la cookie, texto vacio, tiempo - 100
    setcookie('micookie','',time()-100);

}

//para redireccionar las cookies, header('Location:nombre del archivo de la cookie');
header('Location:ver_cookies.php');

?>