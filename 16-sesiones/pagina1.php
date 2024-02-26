<?php

//seimpre par ainiciar sesion
session_start();

//me la imprime a pesar de estar en otro 20-fichero es decir matiene la sesiosn abierta y los datos guardados
echo $_SESSION['variable_persistente'];




?>
