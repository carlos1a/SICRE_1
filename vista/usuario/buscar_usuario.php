<?php
 	require("../../bootstrap/boots.php");
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Usuario</title>
</head>
<body>
<div class="container">
<p class="lead"  align="center">Buscar Usuarios por Cedula</p>
</div>


<div class="form-group">
<?php
require("../../controlador/con_usuario.php");
?>


<form class="navbar-form navbar-right" role="search" method="POST" action="#">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ingrese cedula" name="cedula">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
<br>
<br>
</div>

<div class="container">
<div class="row" >
<div class="col-md-12">

<p class="lead"  align="center"></p>
<br>
<!--inicio de la tabla-->
<div class="panel panel-default">
<table class="table">
    <thead>
        <tr>

            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Departamento</th>
            <th>Cargo</th>
            <th>Modificar</th>
        </tr>
    </thead>

<?php
	for($i=0;$i<pg_num_rows($consulta);$i++){
	# code...

 ?>
    <tbody>
        <tr>
            <td> <?php echo $usu_nombre ; ?></td>
            <td><?php echo $usu_apellido; ?></td>
            <td><?php echo $usu_cedula; ?></td>
            <td><?php echo $usu_telefono; ?></td>
            <td><?php echo $dep_cod; ?></td>
            <td><?php echo $per_cod; ?></td>
        </tr>
    </tbody>

<?php } ?>
</table><!--fin de la tabla-->
</div>


	</div>
	</div>
	</div>

<br>
<br>


<?php require("../../resourse/footer.php"); ?>
</body>
</html>