 <?php
 	require("../bootstrap/boots.php");
  ?>
 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de Usuario</title>
	<style>#form{
		padding-top: 25px;
		}

		</style>
</head>
<body>

<form class="login" id="form" action="../controlador/con_registrar_usuario.php" method="POST">

				<div class="form-group">
					Cédula:<input type="text" class="form-control" placeholder="Ingresa tu Cédula" name="cedula" required autofocus>
				</div>

				<div class="form-group">
					Nombre:<input type="text" class="form-control" placeholder="Ingresa tu Nombre" name="nombre" required autofocus>
				</div>

				<div class="form-group">
					Apellido:<input type="text" class="form-control" placeholder="Ingresa tu Apellido" name="apellido" required autofocus>
				</div>

				<div class="form-group">
					Clave:<input type="password" class="form-control" placeholder="Ingresa tu Clave" name="clave" required autofocus>
				</div>

				<div class="form-group">
					Confirma tu Clave:<input type="password" class="form-control" placeholder="Confirma tu Clave" name="clave_confi" required autofocus>
				</div>

				<div class="form-group">
					Teléfono:<input type="text" class="form-control" placeholder="Ingresa tu Teléfono" name="telefono" required autofocus>
				</div>

				<div class="form-group">
					Correo:<input type="email" class="form-control" placeholder="Ingresa tu Correo" name="correo" required autofocus>
				</div>
				<div class="form-group">
					Departamento:<input type="text" class="form-control" placeholder="Departamento para el cual laboras" name="departamento" required autofocus>
				</div>


				<button class="btn btn-lg btn-primary btn-block" type="submit">ENVIAR</button>

	    </form>

</body>

</html>