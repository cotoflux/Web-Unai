<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Ejercicio Final 1 - Capitulo 6</title>
    </head>
    <body>
        <form action="formfacturas2_12.php" method="post">
            <table>
                <tr><td colspan=4><h1>DATOS VEHÍCULO</h1></td></tr>
                <tr><td>Matrícula</td>
                    <td colspan=3><input type="text" name="matricula" size=25/></td>
                </tr>
                <tr><td>Color:</td>
                    <td><input type="radio" name="color" value="Rojo"/>Rojo<br/>
                        <input type="radio" name="color" value="Verde"/>Verde<br/>
                        <input type="radio" name="color" value="Azul"/>Azul<br/>
                        <input type="radio" name="color" value="Amarillo"/>Amarillo<br/>
                        <input type="radio" name="color" value="Otro" CHECKED/>Otro<br/></td>
                    <td colspan=2><input type="checkbox" name="metal" value="Metalizado"/>Metalizado</td></tr>
                <tr><td>Marca: </td>
                    <td><select name="marca">
                            <option>Seat</option>
                            <option>Audi</option>
                            <option>Renault</option>
                            <option>Ford</option>
                            <option>Daewoo</option>
                            <option>Peugeot</option>
                        </select></td>
                    <td>Modelo: </td>
                    <td><input type="text" name="modelo" size=20/></td></tr>
                <tr><td>Problema Detectado: </td>
                    <td colspan=3><textarea name="problemas" cols="70" rows="4"> Escribenos aquí tu problema</textarea></td></tr>
            </table>
            <table>
                <tr><td colspan=4><h1>DATOS PERSONALES</h1></td></tr>
                <tr><td>Nombre: </td>
                    <td><input type="text" name="nombre" size=30/></td>
                    <td>Edad: </td>
                    <td><input type="text" name="edad" size=5/></td></tr>
                <tr><td>Dirección: </td>
                    <td><input type="text" name="direccion" size=40/></td>
                    <td>Teléfono: </td><td><input type="text" name="telefono" size=20/></td></tr>
                <tr>
                    <td><input type="submit" value="Enviar"/></td>
                    <td colspan=3><input type="reset" value="Reset"/></td></tr>
            </table>
        </form>
    </body>
</html>
