<!--Validar el formulario-->
<?php
//comprobar que los campos me van llegando, ya que son requeridos
$error = "Faltan_valores";
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) &&
    !empty($_POST['edad']) && !empty($_POST['email']) &&
    !empty($_POST['pass'])) {

//crea la variable error en true para validar si me llega toda la informacion
    $error = "OK";

    // creo cada una de las variables para recibir los datos, le asigno a cada variable
    //el dato que me llega
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    //Se castea, se convierte aun int
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Validar nombre
    //Si no es un String o no se cumple el patron "/[a-zA-Z]+/"
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $error = 'nombre';
    }
    //Validar apellido
    //Si no es un String o no se cumple el patron "/[a-zA-Z]+/"
    if (!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
        $error = 'apellido';
    }
    //Validar edad
    //Si no es un numero o validame edad y me mete un filtro que sea FILTER_VALIDATE_INT  = error =edad
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    //Validar email
    //Si no es un string o validame email que sea diferente y me mete un filtro que sea FILTER_VALIDATE_MAIL
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    //Validar Password
    //Validar que este vacia o que tenga mas de 5 caracteres
    if (empty($pass) || strlen($pass)<5){
        $error = 'password';
    }
    //se realiza para hacer debug
    var_dump($_POST);
    var_dump($error);
    //para detener el siclo
    die();


}else {
    //En caso de que no me lleguen estos datos la variable error es true y me da error
    //Realizo una redireccion con header()
    $error = "Faltan_valores";
    }
    //Realizo redireccion
    if ($error != 'ok') {
        header("Location:index.php?error=$error");
    }
?>
<!DOCTYPE>
<html lang="es">
<header>
    <meta charset="utf-8">
    <title>Validacion de formularios PHP</title>

</header>
<body>
<!--Para el manejo de error de cada uno lo datos-->
    <?php if ($error == 'ok' ) : ?>
        <h1>Datos validados corectamente</h1>

         <p><?=$nombre?></p>
         <p><?=$apellido?></p>
         <p><?=$edad?></p>
         <p><?=$email?></p>
         <p><?=$pass?></p>
    <?php endif; ?>

</body>
</html>


