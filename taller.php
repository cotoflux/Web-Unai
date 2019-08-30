<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Ejercicio Final 2 - Capitulo 7</title>
    </head>
    <body>
        <?php
            if(isset($_POST['Boton'])){
                require_once("clasetaller.php");
                echo("<h1>Taller Mecánico:</h1>");
                //Inicializamos el objeto
                $obj=new Taller();
                $obj->setMatricula($_POST['matricula']);
                $obj->setModelo($_POST['modelo']);
                $obj->setFecha($_POST['fecha']);
                $obj->setAveria($_POST['averia']);
                $obj->setNombre($_POST['nombre']);
                $obj->setApellido1($_POST['apellido1']);
                $obj->setApellido2($_POST['apellido2']);
                $obj->setTel($_POST['telefono']);
                //Mostramos el objeto
                $obj->mostrarDatos();
                echo("<a href='taller.php'>Volver</a>");
            }else{
        ?>
        <form action="taller.php" method="post">
        <table border=1>
            <tr><th colspan=2>Datos del Vehículo:</th></tr>
            <tr><td>Matrícula</td><td><input type="text" name="matricula" size=8></td></tr>
            <tr><td>Modelo</td><td><input type="text" name="modelo" size=25></td></tr>
            <tr><td>Fecha de entrada</td><td><input type="text" name="fecha" size=11></td></tr>
            <tr><td>Avería</td><td><textarea name="averia" rows=8 cols=70></textarea></td></tr>
        </table>
        <table border=1>
            <tr><th colspan=4>Datos personales:</th></tr>
            <tr><td>Nombre y apellidos</td>
                <td><input type="text" name="nombre" size=20></td>
                <td><input type="text" name="apellido1" size=20></td>
                <td><input type="text" name="apellido2" size=20></td></tr>
            <tr><td>Teléfono</td><td colspan=3>
            <input type="text" name="telefono" size=10></td></tr>
        </table>
        <table border=1>
            <tr><td><input type="submit" name="Boton" value="Enviar"/></td>
                <td><input type="reset" name="Boton" value="Restablecer"/></td></tr>
        </table>
        </form>
        <a href="taller.php">Volver</a>
        <?php
        }
        ?>
    </body>
</html>
