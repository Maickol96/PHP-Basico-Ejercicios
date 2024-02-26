<?php
//Ejemplo 4 Funcion dentro de otra funcion

function getNombre($nombre){// creo esta funcion para el nombre y luego la llamo dentro de la funcion devuelveNombre
    $texto = "El nombre es: $nombre";

    return $texto;
}
function getApellidos($apellidos){// creo esta funcion para el nombre y luego la llamo dentro de la funcion devuelveNombre
    $texto = "El apellido es: $apellidos";
    return $texto;
}
function devuelveNombre($nombre,$apellidos){//creo esta funcion y llamo o concateto la funcion incial getNombres

     $texto = getNombre($nombre).
         "<br>". getApellidos($apellidos);

    return $texto;
}

echo devuelveNombre("maickol","velasco");
?>
