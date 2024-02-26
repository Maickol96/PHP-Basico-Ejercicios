<?php
/*FOR

for (variable contador, condicion, actualizando contador){
    BLOQUE DEINSTRUCCIONES
}

 */
//EJEMPLO SUMAR TODOS LOS NUMEROS DEL 1 AL 100 Y ME MUESTRE EL RESULTADO FINAL

$resultado = 0;

for ($i = 0; $i <= 100; $i ++){
    $resultado = $resultado + $i;

    echo "<p>$resultado</p>";
}
echo "<h1>El resultado es: $resultado</h1>";

echo "<hr>";

//tabla de multiplicar

if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero = (int)$_GET['numero']; //para que numero que ponemos en la url no lo tome con strin si no como int
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero</h1>";

//iteramos del numero 1 al 10

for ($i = 0; $i <= 10; $i++){
    //ejemplo break

    if ($numero==45){
        echo"Nose puede mostrar esta operacion";
        break;
    }

    echo "$numero x $i = " . ($numero*$i)."<br/>";

}


//$contador =0;
//while ($contador <= 10){
//    echo "$numero x $contador =  " . ($numero*$contador)."<br/>";
//    $contador++;
//}

?>


