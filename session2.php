<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
       <?php
            session_start();
            $_SESSION["Mensaje"]= "Mensaje de inicio creado al comenzar la sessión.";
        ?>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Ejemplo de Session</title>
    </head>
    <body>
        <?php
            echo($_SESSION["Mensaje"]);
            session_unset();
            error_reporting(E_ALL);
            if(session_destroy())
                    echo("<br>Sesión cerrada correctamente.<br><br>");
            else
                    echo("<br>Problemas para cerrar la sesión.<br><br>");

            echo($_SESSION["Mensaje"]);
        ?>
    </body>
</html>
