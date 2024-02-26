<?php

/*para abrir un 20-fichero o file desde php, se usa fopen("nombre_archivo", "r" )
 x => de ejecucion
 r => de lectura
 w => de escritura
 a+ => nos permite leer y escribir
*/
$abrir_archivo = fopen("fichero_texto.txt" ,"a+");

//Leer contenido se usa fgets($abrir_archivo); y se la pasa la variable con la cual abrimos el archivo
//Se debe hacer un while() para uqe me lea todas las lineas del archivo, o si no solo me lee la primera

//SE LEE: recorreme todas la lineas del  archivo, hasta que no leas todas la lineas del archivo no pares
while(!feof($abrir_archivo)) {
    $contenido = fgets($abrir_archivo);
    echo $contenido."<br/>";
}

//Escribir en un archivo
fwrite($abrir_archivo, "<br/> Soy unn texto ingresado desde PHP<br/>");

//para cerrar archivo fclose($abrir_archivo);  se la pasa la variable con la cual abrimos el archivo
fclose($abrir_archivo);

?>
