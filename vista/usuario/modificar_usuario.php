<?php
 	require("../../bootstrap/boots.php");


  ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Usuario</title>
</head>
<body>
<div class="container">
<p class="lead"  align="center">Modificar Usuario</p>
</div>


<div class="form-group">
<?php
require("../../controlador/con_usuario2.php");
?>


<form class="navbar-form navbar-right" role="search" method="POST" action="../../controlador/con_modificar_usuario.php">



<br>
<br>
</div>

<div class="container">
<div class="row" >
    <div class="col-md-4"></div>
<div class="col-md-4">

<p class="lead"  align="center"></p>
<br>
<!--inicio de la tabla-->

<?php
	for($i=0;$i<pg_num_rows($consulta);$i++){
	# code...

 ?>
 <input type="hidden" name="cedula" value="<?php echo $usu_cedula; ?>">
     <div class="form-group">
        Nombre:   <input type="text" class="form-control"  name="nombre" value="<?php echo $usu_nombre ; ?>">
        </div>
         <div class="form-group">
         Apellido:  <input type="text" class="form-control"  name="apellido" value="   <?php echo $usu_apellido; ?>">
        </div>
         <div class="form-group">
         Teléfono: <input type="text" class="form-control"  name="telefono" value="  <?php echo $usu_telefono; ?>">
        </div>
         <div class="form-group">
          Departamento<input type="text" class="form-control"  name="departamento" value="  <?php echo $dep_cod; ?>">
        </div>
        <div class="form-group">
         Perfil: <input type="text" class="form-control"  name="perfil" value="    <?php echo $per_cod; ?>">
        </div>




<?php } ?>
<button type="submit" class="btn btn-default">Enviar</button>
</form>

	</div>
	</div>
	</div>

<br>
<br>


<?php require("../../resourse/footer.php"); ?>
</body>
</html>