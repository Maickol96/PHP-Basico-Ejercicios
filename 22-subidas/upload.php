<?php
//recibir la subida desde el formulario de HTML (procesar la informacion)
//Se usa $_FILES['Nombre del archivo']
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];


if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){

    //Hacer que esta imagen se guarde en nuestro proyecto o servidor\
    //si no es un directorio images se debe crear
    if (!is_dir('images')){
        mkdir('images', 0777);
    }
    //coge el archivo que esta en la memoria temporal y guardala en donde quiera =>  move_uploaded_file()
    //'tmp_name' => es donde se guarda temporalmente antes de ser guarda en nuestro directorio
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    header("Refresh: 5; URL=index.php");
    echo "<h1>Imgagen subida correctamente</h1>";


}else{
    // hacer una redireccion despues de pasarce 3 segundos => se hace headers() permite cambiar las cabeceras
    header("Refresh: 5; URL=index.php");
    echo "<h1> Sube una imagen con un formato correcto, por favor... </h1>";
    }
?>