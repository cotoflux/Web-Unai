<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado Método 1</title>
    </head>
    <body>
        <h1>Datos introducidos por el usuario</h1>
        <?php
            echo("Nombre: " . $_POST["Nombre"] . "<br>");
            echo("Apellidos: " . $_POST["Apellidos"] . "<br>");
        ?>
    </body>
</html>
