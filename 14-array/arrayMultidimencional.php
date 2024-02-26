<?php
//ARRAY MULTIDIMENCIONAL
//Son los que tiene mas array dentro de otros

$contactos = array(

    array('nombre' => 'maickol',
    'email' => 'maickol@maickol.com'
    ),
    array(
        'nombre' => 'Antonio',
        'email' => 'matonio@antonio.com'
    ),
    array(
        'nombre' => 'Erika',
        'email' => 'ereika@erika.com'
    )
);


echo "<ul>";
echo "<li>";
echo $contactos[0]['nombre'];// para acceder se pone la variable y seguido en corchetes el numero de array y en otros corchetes el dato que quiero
echo "</li>";
echo "<br>";
echo "<li>";
echo $contactos[2]['email'];
echo "</li>";
echo "</ul>";
// recorrer con un foreach
echo "<br>";
foreach ($contactos as $key => $contacto){

    echo $contacto['nombre'];
}
?>