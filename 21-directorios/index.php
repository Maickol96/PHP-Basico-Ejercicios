<?php

//Para crear un derictorio o una carpeta
//Pero si la carpeta ya esta creada se usa is_dir
if (!is_dir('mi_carpeta')) {
//se usa mkdir('nombre carprta, permisos)
    mkdir('mi_carpeta', 0777) or die('No se pude crear la carpeta');
}else{
    echo "Ya existe la carpeta";
}

// rmdir => Se usa para borrar directorios
//rmdir('mi_carpeta');

//=> para leer varios archivos dentro de la carpeta
// 1 ->se crea una variable,  $gestor y opendir('nombre_carpeta') para abrir el directorio
//2 -> while: mientras que false sea distinto a $ archivo = a readdir(leer) estare mostrando mis archivos
echo "<hr/><h1>Contenido de la carpeta</h1>";
if($gestor = opendir('./mi_carpeta')){
    while (false !== ($archivo = readdir($gestor))){
        //validacion para que me muestre el nombre de archivo y no el punto a punto
        //1-> si $archivo es distinto a . y $archivo es distinto a .., muestrame el nombre del archivo

        if ($archivo != '.' && $archivo != '..'){
            echo $archivo."<br/>";
        }

    }
}

?>

