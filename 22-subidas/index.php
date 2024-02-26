<!DOCTYPE>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Subir archivos</title>
    </head>
    <body>
    <!--CREAR FORMULARIO-->
        <h1>Subir archivos</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit" value="enviar"/>

        </form>

    <!--Listado de imagenes de la carpeta de imgenes que hemos subido-->
    <h1>Listado de imagenes</h1>
        <?php
        //se le dice que habra el directorio images
            $gestor = opendir('./images');

            // se una la sintaxis : para abrir corchete y endif o endwhile para cerrar corchertes
            if ($gestor):
                while (($image = readdir($gestor)) !== false):
                    if ($image != '.' && $image != '..'):
                        echo "<img src='images/$image' width='200px'/><br/>";
                    endif;
                endwhile;
            endif;

        ?>
    </body>
</html