<?php
/*
Ejercicio 3. hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
uno para sumar, restar, multiplicar y dividir .
*/
//Hacemos la logica para recibir los datos ed el html y hacer la operacion
//si existe el n1 y existe n1 continuar proceso de validar la operacion
if (isset($_POST['n1']) && isset($_POST['n2'])){

    $resultado = false;

    //si existe sumar o es verdadero realizar la operacion
    if (isset($_POST['sumar'])){
        $resultado = "El resultado es : ". ($_POST['n1'] + $_POST['n2']);
    }

    //si existe resta o es verdadero realizar la operacion
    if (isset($_POST['restar'])){
        $resultado = "El resultado es : ". ($_POST['n1'] - $_POST['n2']);
    }

    //si existe multiplicacion o es verdadero realizar la operacion
    if (isset($_POST['multiplicar'])){
        $resultado = "El resultado es : ". ($_POST['n1'] * $_POST['n2']);
    }

    //si existe divicion o es verdadero realizar la operacion
    if (isset($_POST['dividir'])){
        $resultado = "El resultado es : ". ($_POST['n1'] / $_POST['n2']);
    }

}else{
    echo "Ingresar dos numeros correctos...";
}



?>

<!--Estructura de html basica-->

<!DOCTYPE>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <!--Se crea formulario-->
        <form action="" method="post">
            <!--campo n1-->
            <label for="n1">Numero 1</label><br/>
            <input type="number" name="n1"/><br/>

            <!--campo n2-->
            <label for="n2">Numero 2</label><br/>
            <input type="number" name="n2"/><br/>
              <hr/>

            <!--Se crean los botones-->
            <input type="submit" value="Sumar" name="sumar"/>
            <input type="submit" value="Restar" name="restar"/>
            <input type="submit" value="Multiplicar" name="multiplicar"/>
            <input type="submit" value="Dividir" name="dividir"/>
        </form>

        <!--Resultado-->
        <!--Cuando se usa un if en html los corchetes se reemplazan por : el de apertura y el de cierre por "endif"-->
        <?php
        //si resultado es diferente de falso, (es decir si vienen los dos numero sy la operacion) imprimir resultado
        if($resultado != false):
            echo "<h1>$resultado</h1>";
        endif;
        ?>


    </body>
</html>
