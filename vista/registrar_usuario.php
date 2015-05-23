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
<div class="row" >
<div class="col-md-12" >
	<form class="form-horizontal" id="form" action="../controlador/con_registrar_usuario.php" method="POST" >

				<div class="form-group">
					<label for="cedula" class="control-label col-md-4">Cedula:</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Ingresa tu Cedula" name="cedula" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Nombre:</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Ingresa tu Nombre" name="nombre" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Apellido:</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Ingresa tu Apellido" name="apellido" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Clave:</label>
						<div class="col-md-6">
							<input type="password" class="form-control" placeholder="Ingresa tu Clave" name="clave" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Confirma tu Clave:</label>
						<div class="col-md-6">
							<input type="password" class="form-control" placeholder="Confirma tu Clave" name="clave_confi" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Telefono:</label>
						<div  class="col-md-6">
							<input type="text" class="form-control" placeholder="Ingresa tu Telefono" name="telefono" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Correo:</label>
						<div class="col-md-6">
							<input type="email" class="form-control" placeholder="Ingresa tu Correo" name="correo" required autofocus>
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Departamento:</label>
						<div class="col-md-6">
							<select class="form-control" name="departamento" required >
							        <option  selected="selected" value="0">Selecione</option>
							        <option value="1">Tecnologia</option>
							        <option value="2">Operaciones</option>
							        <option value="3">Comercializacion</option>
							        <option value="3">Administracion</option>
							        <option value="3">RRHH</option>
							</select>
						</div>
				</div>
				<div class="col-md-2 col-md-offset-6">
					<button class="btn btn-lg btn-primary btn-block " type="submit">ENVIAR</button>
				</div>


	</form>

	</div>
	</div>
	<br>
</div>
<?php require("../resourse/footer.php"); ?>

</body>

</html>