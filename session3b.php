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
        <?php 
            session_start(); // Abrir/reactivar la sesión. 
        ?> 
        <b>Página 2</b><br /> 
        <?php 
        // Mostrar los datos de la sesión que recibimos de la anterior página. 
        echo 'El valor actual de [nombre] es ',$_SESSION['nombre'],'<br />'; 
        // Modificar los datos de la sesión. 
        $_SESSION['nombre'] = 'Jorge'; 
        //Mostramos el nuevo valor modificado
        echo 'Modificamos el valor de [nombre] a ',$_SESSION['nombre'],'<br />'; 
        // Reinicializar los datos de la sesión. 
        session_reset(); 
        // Y Mostrar los datos de la sesión. 
        echo 'Reinicializamos la sesión y [nombre] será ',$_SESSION['nombre'],'<br />'; 
         ?> 
    </body>
</html>
