<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Ejemplo de Session</title>
    </head>
    <body>
        <b>Página ejemplo PHP - session_reset()</b><br /> 
        <?php 
            session_start(); //Iniciamos y Activamos la session
            // Creamos y mostramos un dato que almacenaremos en la sesión
            $_SESSION['nombre'] = 'Carlos'; 
            echo 'nombre = ',$_SESSION['nombre'],'<br />'; 
        ?> 
        <a href="session3b.php">Página 2</a><br />     
    </body>
</html>
