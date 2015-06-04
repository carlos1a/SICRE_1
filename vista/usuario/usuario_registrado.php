 <?php
 	require("../../bootstrap/boots.php");
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuario registrado</title>
</head>
<body>
<header align="center"><h2>Sus datos se han guardado exitosamente en el Sistema Central de Reportes <br> SICRE</h2> </header>



<div class="form-group">
<?php
require("../../controlador/con_usuario_registrado.php");
?>


<div class="container">
<div class="row" >
<div class="col-md-12">

<p class="lead"  align="center">Verifiquelos y sigas las instrucciones para iniciar sesion</p>
				<div class="form-group">
				<p class="text-primary" align="center">Nombre: <?php echo $usu_nombre; ?></p>
				</div>

				<div class="form-group">
					<p class="text-primary" align="center">Apellido: <?php echo $usu_apellido; ?></p>
				</div>

				<div class="form-group">
					<p class="text-primary" align="center">Cedula: <?php echo $usu_cedula; ?></p>
				</div>

				<div class="form-group">
					<p class="text-primary" align="center">Telefono: <?php echo $usu_telefono; ?></p>
				</div>

				<div class="form-group">
					<p class="text-primary" align="center">Departamento: <?php echo $dep_cod; ?></p>
				</div>

				<div class="form-group">
					<p class="text-primary" align="center">Cargo: <?php echo $per_cod; ?></p>
				</div>




	</div>
	</div>

	<br>

	<p class="text-info" align="center">Si sus datos son correctos precione <a href="../index.php">SALIR</a> para que puedas iniciar sesion e ingresar al Sistema Central de Reportes</p>
	<p class="text-info" align="center">De lo contrario, por favor, comuniquese con el Departamento de Tecnologia, a traves de <a href="">CONTACTO</a></p>

</div>
<br>


<?php require("../../resourse/footer.php"); ?>
</body>
</html>