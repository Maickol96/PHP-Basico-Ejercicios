<?php

//Ejemplo RETURN
//para una buena practica siempre debe retornar algo sea true o false, y no se puede hacer directamente con echo
function devuelveNombre($nombre)
{

    return "El nombre es $nombre";
}

echo devuelveNombre("maickol jose");


//Ejemplo de funcion escrito correctamente, implementando buenas practicas como return
function calcudora2($numero1, $numero2, $negrita = false){
    //conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;

    //SE CREA LA VARIABLE CADENA TEXTO VACIO, Y SE LE VA CONCATENANDO TODOS ECHOS
    $cadenaTexto = "";

    //parametro 3 opcional valida en el if y se pone en negrita.
    if ($negrita) { // tambien se puede usar $negrita (!= false), ya que por defecto siempre va a ser true si no se pone ningun parametro adicional
        $cadenaTexto .= "<h1>";
    }

    $cadenaTexto .= "Suma: $suma <br/>"; //de esta manera se quitan echos y
    $cadenaTexto .= "Resta: $resta <br/>";
    $cadenaTexto .= "Multiplicacion: $multiplicacion <br/>";
    $cadenaTexto .= "Divicion: $divicion <br/>";

    if ($negrita) {
        $cadenaTexto .= "</h1>";
    }

    $cadenaTexto .= "<hr>";
    return $cadenaTexto; //se pone return de la variable

}
//para poder imprimir el valor de la funcion se debe agregar un echo o de lo contrario no muestra nada
echo calcudora2(500000,4);
echo calcudora2(2,90, true);

?>