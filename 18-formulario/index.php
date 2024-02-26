<!DOCTYPE>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario PHP y HTML</title>
</head>
<body>
<form>

<!--PARA CREAR UN FORMULARIO-->
<!-- action="":Hace referencia a la pagina a la cual v a air la informacion del formulario, si no va air a otra pagina se deja vacio -->
<!--method="post": para colocar el tipo de metodo-->
<!--enctype="multipart/form-data": permite enviar archivos desde el formulario hasta el servidor-->
<h1>Formulario</h1>
<p action="" method="post" enctype="multipart/form-data">

    <!--disabled="disabled": Para desahabilitar un campo del formulario-->
    <label for="nombre"> Nombre: </label>
    <p><input type="texto" name="nombre" disabled="disabled"/></p>

    <!--autofocus="autofocus": para enfocar un campo en vien cargue la pagina-->
    <!--maxlength="15" y  maxlength="15": Nos sirbe para poner un minimo y un maximo de letras-->
    <!--pattern="[A-Z]+": Para saber que tipo de letras y numero puedo poner, si solo letras o solo numeros y tambien espacios-->
    <!--required="required": no permite indicar que un campo debe ser obligatorio en el formulario-->
    <!--placeholder="Mete tu apellido": Para poner un texto por encima del boton y cuando ha click se quite-->
    <!--placeholder="Mete tu apellido": Para poner un texto un texto real y luego borrarlo y poder poner el queramos-->
    <label for="apellido">Apellido:</label>
    <p><input type="texto" name="nombre" autofocus="autofocus" maxlength="15" minlength="5" pattern="[A-Z]+" required="required" placeholder="Mete tu apellido"
              value=" mete tu apellido"/></p>

    <!--Para poner un boton en el formulario-->
    <p><label for="boton">Boton</label></p>
    <p><input type="button" name="boton" value="click"/></p>

    <!--type="Checkbox: Para checquear alguna informacion que tengamos en el formulario-->
    <p><label for="sexo">Sexo</label></p>
    <p>
        Mujer: <input type="Checkbox" name="sexo" value="Mujer"/>
        Hombre: <input type="Checkbox" name="sexo" value="Hombre"/>
    </p>

    <!--type="color":  me saca un color piker un cuadro de color para seleccionar mi color -->
    <p><label for="color">Color</label></p>
    <p><input type="color" name="color"/></p>

    <!--type="date": Para poner la fecha, me saca un calendario para seleccionar la fecha -->
    <p><label for="fecha">Fecha</label></p>
    <p><input type="date" name="fecha"/></p>

    <!--input type="email": Para que cumpla el formato de tipo correo -->
    <p><label for="correo">Correo</label></p>
    <p><input type="email" name="correo"/></p>

    <!--input type="file": Para subir un archivo, o seleccionar un archivo-->
    <!--multiple="multiple"": Para subir varios archivo-->
    <p><label for="archivo">Archivo</label></p>
    <p><input type="file" name="archivo" multiple="multiple"/></p>

    <!--input type="number":  me permite seleccionar numeros-->
    <p><label for="numero">Numero</label></p>
    <p><input type="number" name="numero"/></p>

    <!--input type="password":  me permite introducir la contrasna, esos campos no van a ser visebles-->
    <p><label for="pass">Contrasena</label></p>
    <p><input type="password" name="pass"/></p>

    <!--input type="radio":  me permite seleccionar 1 entre varios elementos-->
    <p><label for="continente">Continente</label></p>
    <p>
        Ameria del Sur: <input type="radio" name="continente" value="Ameria del Sur"/>
        Ameria del Norte: <input type="radio" name="continente" value="Ameria del Norte"/>
        Europa: <input type="radio" name="continente" value="Europa"/>
        Africa: <input type="radio" name="continente" value="Africa"/>
        asi: <input type="radio" name="continente" value="asi"/>
    </p>

    <!--input type="url":  me permite poner el formato de url, si nose cumple no se envia el formulario-->
    <p><label for="web">Pagina web</label></p>
    <p><input type="url" name="web"/></p>

    <!--<textarea></textarea>:  me permite generar un campo para escribir texto mas grande-->
    <textarea></textarea>

    <!--<select></select>:  me permite elegir o seleccionar un elemento de una lista-->
    <!--name="peliculas":  la variable par poder recibir los datos en el backend-->
    <!--<option>Spideman</option>:  Para agregar los campos o datos a la lista-->
    <!--value="Spideman:  para poder recibir el datos en el back, por lo general se pne el mismo nombre -->
    <p>Peliculas:
    <select name="peliculas">
        <option value="Spideman">Spideman</option>
        <option value="Naruto">Naruto</option>
        <option value="Fin del mundo">Fin del mundo</option>
        <option value="2012">2012</option>
    </select>
    </p>


    <input type="submit" value="Enviar"/>

</form>
</body>

</html>

<?php
?>