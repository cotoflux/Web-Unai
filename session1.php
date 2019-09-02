<!DOCtype html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Ejemplo de Session</title>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <?php session_start(); ?>
    </head>
    <body>
        <div class="container">
     <form action="session1.php" method="post">
    <table class="table table-dark">
        <thead>
            <tr  align="center">
                <th colspan="3"><h2 class="">Haga su compra</h2></th>
            </tr>
        </thead>
        <tbody>
        <tr align="center">
            <td><img src="imgcurso/cacharel.jpg"><br>
                <input type="radio" name="perfume" value="67.80">
		Cacharel Promesse (67,80€)</td>
            <td><img src="imgcurso/dior.jpg"><br>
                <input type="radio" name="perfume" value="62.40">
		Dior Pure Poison (62,40€)</td>
            <td><img src="imgcurso/212sexy.jpg"><br>
                <input type="radio" name="perfume" value="69">
		Carolina Herrera 212sexy (69,00€)</td>
        </tr>
        <tr align="center">
            <td><img src="imgcurso/givenchy.jpg"><br>
                <input type="radio" name="perfume" value="56.50">
		Givenchy Very Irresistible (56,50€)</td>
            <td><img src="imgcurso/loewe.jpg"><br>
                <input type="radio" name="perfume" value="63">
		Loewe Aire (63,00€)</td>
                <td><img src="imgcurso/valentino.jpg"><br>
                <input type="radio" name="perfume" value="68.30">
                        Valentino V (63,80€)</td>
        </tr>
        <tr align="CENTER">
            <td colspan="3">
                <input type="submit" class="btn-success" name="Sumar" value="Añadir a la cesta">
                <input type="submit" class="btn-warning" name="Quitar" value="Quitar de la cesta">
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
        <?php
        if (isset($_POST["perfume"])) {
            if (!isset($_SESSION["Producto"])) {
                $_SESSION["Producto"]=0;
                $_SESSION["Total"]=0;
            }
            if (isset($_POST["Sumar"])) {
                $_SESSION["Producto"]++;
                $_SESSION["Total"]+=$_POST["perfume"];
            }
            else {
                $_SESSION["Producto"]--;
                $_SESSION["Total"]-=$_POST["perfume"];
            }
            echo("<td>Productos: " . $_SESSION["Producto"]. "</td><td></td>");
            echo("<td>Total Compra: " . $_SESSION["Total"]. "</td>");
        }
        ?>
        </tr>
        </tfoot>
        </table>
        </form>
        </div>
    </body>
</html>