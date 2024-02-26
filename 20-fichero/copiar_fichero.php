<?php

//Para copiar el archivo => usamos el comando copy(file_original, file_name_copia) y el => or die(me muestra un manejo de error)
copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar")

?>
