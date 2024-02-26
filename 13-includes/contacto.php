<?php
// De esta manera llamo el menu principal desde el file cabecera
include 'includes/cabecera.php'; //permite leer su contenido de un 20-fichero y colocar su codigo donde la estamos llamando
?>

<!--Contenido-->
<div>
    <h2>Esta es la pagina de inicio</h2>
    <p>Texto de prueba de la pagina de inicio</p>

    <?php
    var_dump($nombre); // lo puedo llamar desde el 20-fichero cabecera
    ?>
</div>



<?php include 'includes/footer.php' //se llama el pie de pagina?>



