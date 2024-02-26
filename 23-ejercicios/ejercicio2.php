<?php
/*
 Ejercicio2 =>
1. Una funcion
2. la funcion debe validar un email con filter_var
3. Recoger variable por get y validarla
4. Mostrar el resultado*/


//Se crea la funcion
//Se usa un if para validar escriban el correo y que cumpla con el formato
function validarEmail($email){
    //se crea variable estatus para dar estado
    $estatus =  "Novalido";
    //si $email no esta vacio y cumple con el formato de email responder $estatus = valido si no por defecto es estatus no valido
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){

        $estatus = "Valido";
    }
    return $estatus;
}
// si existe el email usar la funcion y si no responder "escribir email..."
if (isset($_GET['email'])){

    echo validarEmail($_GET["email"]);
}else{
    echo "Escribir un email...";
}
?>