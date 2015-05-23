 <?php
 	require("../bootstrap/boots.php");
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
  	<meta charset="UTF-8">

  <title>Registro de Usuario</title>
<header align="center"><h2>Complete el Formulario para Registrarse en el Sistema Central de Reportes <br> SICRE</h2> </header>

<div class="container">
<div class="row">
<div class="col-md-12" >
	<form class="form-horizontal" id="form" action="../controlador/con_registrar_usuario.php" method="POST" >

				<div class="form-group">
					<label for="cedula" class="control-label col-md-4">Cédula:</label>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="Ingresa tu Cédula" name="cedula" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Nombre:</label>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="Ingresa tu Nombre" name="nombre" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Apellido:</label>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="Ingresa tu Apellido" name="apellido" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Clave:</label>
						<div class="col-md-4">
							<input type="password" class="form-control" placeholder="Ingresa tu Clave" name="clave" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Confirma tu Clave:</label>
						<div class="col-md-4">
							<input type="password" class="form-control" placeholder="Confirma tu Clave" name="clave_confi" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Teléfono:</label>
						<div  class="col-md-4">
							<input type="text" class="form-control" placeholder="Ingresa tu Teléfono" name="telefono" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Correo:</label>
						<div class="col-md-4">
							<input type="email" class="form-control" placeholder="Ingresa tu Correo" name="correo" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Departamento:</label>
						<div class="col-md-4">
							<select class="form-control" >
							        <option  selected="selected" value="0" >Selecione</option>
							        <option value="1">Informática</option>
							        <option value="2">Recursos Humanos</option>
							        <option value="3">Contabilidad</option>
							</select>
						</div>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<button class="btn btn-lg btn-primary btn-block " type="submit">ENVIAR</button>
				</div>


	</form>

	</div>
	</div>
	<br>
</div>
<?php require("footer.php"); ?>

</body>

</html>