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
        <?php
        $matricula=$_POST['matricula'];
        $color=$_POST['color'];

        //comprobamos si la casilla metalizado ha sido activada o no
                if(isset($_POST['metal']))
                {
                $metalizado=$_POST['metal'];
                }
                else
                {
                $metalizado="Normal";
                }
            //Almacenamos el resto de datos envíados por el fórmulario en variables
            $marca=$_POST['marca'];
            $modelo=$_POST['modelo'];
            $problemas=$_POST['problemas'];
            $nombre=$_POST['nombre'];
            $edad=$_POST['edad'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
        ?>
        <table border=1>
            <th colspan=2>DATOS VEHÍCULO</th></tr>
            <tr><td>Matrícula: </td><td><?php echo("$matricula");?></td></tr>
            <tr><td>Color: </td><td><?php echo("$color");?></td></tr>
            <tr><td>Marca: </td><td><?php echo("$marca");?></td></tr>
            <tr><td>Modelo: </td><td><?php echo("$modelo");?></td></tr>
            <tr><td>Averia: </td><td><?php echo("$problemas");?></td></tr>
            
            <th colspan=2>DATOS PERSONALES</th></tr>
            <tr><td>Nombre: <?php echo("$nombre");?><br/>
            Dirección: <?php echo("$direccion");?>
            </td><td>Edad: <?php echo("$edad");?><br/>
            Teléfono: <?php echo("$telefono");?>
            </td></tr>
        </table>
    </body>
</html>
