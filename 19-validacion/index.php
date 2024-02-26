<!DOCTYPE>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Validacion de formulario</title>
</head>
<body>
    <h1>Validar Formulario en PHP</h1>

    <!--Esto se realiza para traer el error desde el php, por el metodo get
    y me aparezca un mensaje en pantalla-->
    <?php
    if (isset($_GET['error'])){
        $error = $_GET['error'];
            if($error == 'Faltan_valores'){
                echo '<strong style="color:red">Introduce todos los datos en el campo del formulario</strong>';
            }
        //validar si me llega un error por cada valor que me llega de get
            if ($error == 'nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }
            if ($error == 'apellido'){
                echo '<stron style="color: red">Introduce bien el apellido</stron>';
            }
            if($error == 'edad'){
                echo '<strong style="color: red">Introduce bien la edad</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color: red">Introduce bin el email</strong>';
            }
            if ($error ==  'pass'){
                echo '<strong style= "color: red">Introduce bien el password</strong>';
            }

    }

    ?>
<!--Formulario-->
    <form method="POST" action="procesar_formulario.php">
        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre" required="required" pattern="[a-zA-Z]+"><br/>

        <label for="apellido">Apellido</label><br/>
        <input type="text" name="apellido" required="required" pattern="[a-zA-Z]+"><br/>

        <label for="edad">Edad</label><br/>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br/>

        <label for="email">Email</label><br/>
        <input type="email" name="email" required="required"><br/>

        <label for="pass">Contraseña</label><br/>
        <input type="password" name="pass" required="required"  minlength="5"><br/>


        <input type="submit" name="Enviar"><br/>
    </form>
</body>

</html>

<?php
