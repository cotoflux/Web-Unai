<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Ejercicio Final 2 - Capitulo 6</title>   
    </head>
    <body>
        <?php //Averiguamos primero si la página ha sido enviada
        if(isset($_POST['BotEnvia'])){
        //controlamos si el primer plato ha sido seleccionado
                if(isset($_POST['primer'])){
                $primer=$_POST['primer'];
                }
                else
                {
                $primer=0;
                echo "No se ha seleccionado ningún primer plato. <br>";
                }
        //controlamos si el segundo plato ha sido seleccionado
                if(isset($_POST['segundo'])){
                $segundo=$_POST['segundo'];
                }
                else
                {
                $segundo=0;
                echo "No se ha seleccionado ningún segundo plato. <br>";
                }
        //controlamos si la bebida  ha sido seleccionada
                if(isset($_POST['bebida'])){
                $bebida=$_POST['bebida'];
                }
                else
                {
                $bebida=0;
                echo "No se ha seleccionado ninguna bebida. <br>";
                }
        //controlamos si el postre  ha sido seleccionado
                if(isset($_POST['postre'])){
                $postre=$_POST['postre'];
                }
                else
                {
                $postre=0;
                echo "No se ha seleccionado ningún postre. <br>";
                }

        $cafe=$_POST['cafe']*0.90;
        $cortado=$_POST['cortado']*0.90;
        $cafeleche=$_POST['cafeleche']*1.10;
        $infu=$_POST['infu']*1.00;
        $sum=$primer+$segundo+$bebida+$postre+$cafe+$cortado+$cafeleche+$infu;

                echo ("<h1>Total cuenta: ".$sum." €</h1>");
                echo ("<br/><br/><a href='restaurante.php'>Volver</a>");
        }
        ?>
        <form action="restaurante.php" method="post">
            <table>
                <tr><th>Primer Plato</th><th>Segundo Plato</th><th>Bebida</th><th>Postre</th></tr>
                <tr><td><select name="primer" size=5>
                            <option value="4.50">Canelones de pesado</option>
                            <option value="4.00">Sopa de ajo</option>
                            <option value="5.50">Arroz al horno</option>
                            <option value="5.00">Tallarines a la boloñesa</option>
                            <option value="4.25">Ensalada verde</option>
                        </select></td>
                    <td><select name="segundo" size=5>
                            <option value="7.50">Bacalao a la vizcaina</option>
                            <option value="9.00">Dorada a la sal</option>
                            <option value="6.75">Brochetas de cerdo y piña</option>
                            <option value="7.15">Costillitas de cabrito</option>
                            <option value="5.50">Pechuga de pollo</option>
                        </select></td>
                        <td><select name="bebida" size=5>
                        <option value="1.20">Agua</option>
                        <option value="1.50">Agua con gas</option>
                        <option value="3.00">Vino de la casa</option>
                        <option value="1.25">Refresco</option>
                            </select></td>
                        <td><select name="postre" size=5>
                        <option value="2.50">Fruta del tiempo</option>
                        <option value="3.00">Flan</option>
                        <option value="3.00">Natillas</option>
                        <option value="4.15">Tarta de queso</option>
                        <option value="4.50">Tarta de chocolate</option>
                            </select></td></tr>
                <tr><td><center>Café: <input type="text" name="cafe" size="1"/></center></td>
                    <td><center>Cortado: <input type="text" name="cortado" size="1"/></center></td>
                    <td><center>Café con leche: <input type="text" name="cafeleche" size="1"/></center></td>
                    <td><center>Infusión: <input type="text" name="infu" size="1"/></center></td></tr>
                <tr><td colspan=2 align="right"><input type="submit" value="Cuenta" name="BotEnvia"/></td>
                    <td colspan=2 align="left"><input type="reset" value="Borrar" name="BotBorra"/></td></tr>
            </table>
        </form>

    </body>
</html>
