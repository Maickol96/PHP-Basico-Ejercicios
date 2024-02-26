<?php

//Debuggear, o ver los datos de una variable
$nombre = "Maickol Velasco";
var_dump($nombre);

echo "<br>";
echo"<hr>";


//para fechas
echo date('d-M-Y');

echo "<br>";
echo"<hr>";


//FUNCION TIME, FECHA EN FORMATO unique
echo time();

echo "<br>";
echo"<hr>";


//Matematicas
echo "raiz cuadrada de 10 = " . sqrt(5);

echo "<br>";
echo"<hr>";


//numero aleatorio
echo "numero aleatoreo entre 10 y 40 = ".rand(1,15);

echo "<br>";
echo"<hr>";


//numero pi
echo "Numero pi = " .pi();

echo "<br>";
echo"<hr>";

//redondear

echo "Redondeo = ".round(7.891234); // para mas precicio, se pone una coma y el numero de decimales que nesecito despues del punto

//MAS FUNCIONES GENERALES


echo "<br>";
echo"<hr>";

echo gettype($nombre); //Me imprime el tipo de dato

echo "<br>";
echo"<hr>";


//comprobar si una variable es de un tipo u otro

if (is_string($nombre)){
    echo "Esa variable es un String";
}
echo "<br>";
if (!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";

}


echo "<br>";
echo"<hr>";


//con la funcion isset(), podemos validar si una variable existe o no existe dentro de nuestro programa, si existe regresa true y si no retorna false

if (isset($nombre)){
    echo "la variable existe";
}else{
    echo "La variable no existe";
}

echo "<br>";
echo"<hr>";


//Funcion trim me permite que si yo tengo una variable y le pongo espacios por delante y detras, la limpia o borra estos espacios
//limpiar espacios
$frase = "     mi contenido                     ";
var_dump(trim($frase));

echo "<br>";
echo"<hr>";


//Elimar variables e indices de array
//Es para alimar del caodigo la variabl;e

$year = 2024;

unset($year);

var_dump($year);

echo "<br>";
echo"<hr>";


//Validar si una variable esta vacio, no existe o si variable es cero

$texto = "true";

if (empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "Que me diga que la variable texto tiene contenido";
}

echo "<br>";
echo"<hr>";


//Contar caracteres de una cadena de texto, String

$cadena = "65198641+685465";
echo strlen($cadena);

echo "<br>";
echo"<hr>";

//Encontrar caracter

$frase ="la vida es bella";
echo strpos($frase, "i");

echo "<br>";
echo"<hr>";

/*
=> Reemplazar contenido de un string
=> para reemplazar el parametro uno es la palabra que queremos reemplazar, datos 2 es la palabra que
=>  queremos poner, dato 3 es la variable donde esta el strig que queremos reemplazar
*/
$palabra = "la vida es muy larga si uno es pobre";

$palabra = str_replace("vida", "muerte", $palabra);
echo $palabra;


echo "<br>";
echo"<hr>";


//CONVERTIR LAS MAYUSCULAS Y MINUSCULAS

echo strtolower($frase); //convierte en minusculas
echo "<br>";
echo strtoupper($frase);//convierte en mayusculas


?>
