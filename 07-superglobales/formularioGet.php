//para crear un formulario por medio del portocolo HTTP tipo GET
<!DOCTYPE HTML>
<html lang="es">
        <head>
            <meta charset="UTF-8" />
            <title>Formulario en PHP</title>
        </head>
        <body>
        <h1>Formulario en PHP</h1>
        <form method="GET" action="recibirGet.php">

            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
        </p>
        <p>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
         </p>

            <input type="submit" value="Enviar datos">
        </form>
        </body>
<?php
