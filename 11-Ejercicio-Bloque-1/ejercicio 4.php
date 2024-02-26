<?php
/*
 EJERCICIO 4
Recoger 2 numeros por la URL (Parametros GET) y hacer todas las operaciones basicas de
una calculadora, suma , resta, multiplicaion de esos 2 numeros.
*/
var_dump($_GET);

if (isset($_GET['numero1']) && isset($_GET['numero2'])){

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<h1>Calcuadora</h1>";
    echo "Suma:". ($numero1+$numero2)."<br/>";
    echo "Resta:". ($numero1-$numero2)."<br/>";
    echo "Multiplicacion: ". ($numero1*$numero2)."<br/>";
    echo "Divicion: ". ($numero1%$numero2)."<br/>";


}else{
    echo "<h1>Introduce correctamente los numero por la consola</h1>";
}

?>


