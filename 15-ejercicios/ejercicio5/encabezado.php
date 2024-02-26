<?php
?>

<tr>
    <!--MENU PRINCIPAL-->
    <!--!agregamos codigo php en el html de la siguiente manera para mostrar el menu lo recorremos
    con un foreach-->
    <?php  foreach ($categorias as $categoria): ?>
        <!--Para imprimir una variable  de php en html-->
        <th><?= $categoria?></th>
    <?php endforeach; ?>
</tr>
