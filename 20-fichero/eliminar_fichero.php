<?php

//Eliminar un archivo
unlink('archivo_renombrado.txt') or die('Eror al borrar el archivo');

//comprobar is un archivo existe

if (file_exists("fichero_texto.txt")){
    echo "El archivo existe";
}else{
 echo "El archivo no existe";
}

?>