 <?php
 	require("../../bootstrap/boots.php");
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
  	<meta charset="UTF-8">

  <title>Registro de Usuario</title>
<header align="center"><h2>Formulario de Registro en el Sistema Central de Reportes <br> SICRE</h2> </header>

<div class="container">
<div class="row" >
<div class="col-md-12" >
	<form class="form-horizontal" id="form" action="#" method="POST" >

				<div class="form-group">
					<label for="cedula" class="control-label col-md-4">Cedula:</label>
						<div class="col-md-6">
							<input type="text" title="Su cedula debe contener entre 7 y  8 numeros sin espacios ni letras" pattern="[0-9]{7,8}" class="form-control" placeholder="Ingresa tu Cedula" name="cedula" required autofocus maxlength="8">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Nombre:</label>
						<div class="col-md-6">
							<input type="text" title="Su nombre No puede poseer espacios en blancos ni caracteres especiales" class="form-control" pattern="[a-zA-Z]+" placeholder="Ingresa tu Nombre" name="nombre" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Apellido:</label>
						<div class="col-md-6">
							<input type="text" title="Su Apellido No puede poseer espacios en blancos ni caracteres especiales" class="form-control" pattern="[a-zA-Z]+" placeholder="Ingresa tu Apellido" name="apellido" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Clave:</label>
						<div class="col-md-6">
							<input type="password" title="Su clave debe contener letras, numeros y al menos un caracter especial y debe " class="form-control"  pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{6,15}" placeholder="Ingresa tu Clave" name="clave" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Confirma tu Clave:</label>
						<div class="col-md-6">
							<input type="password" title="Su clave debe contener letras, numeros y al menos un caracter especial y debe " class="form-control"  pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{6,15}" placeholder="Confirma tu Clave" name="clave_confi" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Telefono:</label>
						<div  class="col-md-6">
							<input type="text" title="Su telefono debe contener 10 numeros " class="form-control" pattern="[0-9]{10}" placeholder="Ingresa tu Telefono 4161234567" name="telefono" required autofocus maxlength="10">
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

				<div class="form-group">
					<label for="" class="control-label col-md-4">Cargo:</label>
						<div class="col-md-6">
							<select class="form-control" name="cargo" required >
							        <option  selected="selected" value="0">Selecione</option>
							        <option value="1">Administrador</option>
							        <option value="2">Director</option>
							        <option value="3">Gerente</option>
							        <option value="3">Coordinador</option>
							        <option value="3">Supervisor</option>
							        <option value="3">Especialista</option>
							        <option value="3">Gestor</option>
							        <option value="3">Analista</option>
							        <option value="3">Ejecutivo</option>
							        <option value="3">Asistente</option>
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
<?php require("../../resourse/footer.php"); ?>

</body>

</html>