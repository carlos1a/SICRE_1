<?php
 	require("../bootstrap/boots.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Exitoso</title>
</head>
<body>
<p class="lead"  align="center">En esta seccion podras verificar los ultimos 10 usuarios registrado en el SICRE, asi como buscar algun usuario especifico, con solo colocar en el buscador el numero de cedula del usuario</p>



<div class="form-group">
<?php
require("../controlador/con_lista_usu.php");
?>


<form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ingrese cedula">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
<br>
<br>
</div>

<div class="container">
<div class="row" >
<div class="col-md-12">

<p class="lead"  align="center">Ultimos 10 Usuarios Registrados en el SICRE</p>
<?php foreach ($usu_nombres as $usu_nombre) { ?>
				<div class="form-group">
				<p class="text-primary" align="center">Nombre:  <?echo $usu_nombre; ?></p>
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


	<?php } ?>

	</div>
	</div>
	</div>

<br>
<br>


<?php require("../resourse/footer.php"); ?>
</body>
</html>