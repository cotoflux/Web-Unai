<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Formulario y Página PHP</title>
    </head>
    <body>
        <?php
        if (!isset($_POST["Nombre"])){
        ?>
         <div class="container">
          <h2>Datos Personales</h2>
          <form class="form-horizontal" action="formulario1b.php" method="post">
            <div class="form-group">
              <label class="control-label col-sm-2" for="Nombre">Nombre:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Nombre" placeholder="Introduzca su nombre" name="Nombre">
              </div>
            </div>
            <div class="form-group col-sm-12">
              <label class="control-label" for="Apellidos">Apellidos:</label>
              <div class="row">
                <div class="col-sm-5">          
                  <input type="text" class="form-control" id="Apellidos[]" placeholder="Primer apellido" name="Apellidos[]">
                </div>
                <div class="col-sm-5">   
                  <input type="text" class="form-control" id="Apellidos[]" placeholder="Segundo apellido" name="Apellidos[]">
                </div>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="Boton_enviar" value="Enviado">Enviar</button>
                <button type="reset" class="btn btn-warning" name="Boton_borrar" value="Eliminado">Borrar</button>
              </div>
            </div>
          </form>
        </div>
        <?php
        } else {
            echo("<h1>Datos introducidos por el usuario</h1>");
		foreach ($_POST as $campo =>$valor)
			if (count($_POST[$campo])>1)
				foreach($valor as $datofin)
					echo($campo . " - <b>" . $datofin . "</b><br>");
			else
				echo($campo . " - <b>" . $valor . "</b><br>");
	}
        ?>
    </body>
</html>
