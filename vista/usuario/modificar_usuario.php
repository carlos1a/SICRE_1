<?php
 	require("../../bootstrap/boots.php");
    if (!isset($_GET['param_id'])) {
    $cedula=base64_decode( $_GET['param_id']);
    }else{

    }

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
require("../../controlador/con_usuario.php");
?>


<form class="navbar-form navbar-right" role="search" method="POST" action="#">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ingrese cedula" name="cedula">
        </div>


<br>
<br>
</div>

<div class="container">
<div class="row" >
<div class="col-md-12">

<p class="lead"  align="center"></p>
<br>
<!--inicio de la tabla-->

<?php
	for($i=0;$i<pg_num_rows($consulta);$i++){
	# code...

 ?>
     <div class="form-group">
          <input type="text" class="form-control"  name="nombre" value="<?php echo $usu_nombre ; ?>">
        </div>
         <div class="form-group">
          <input type="text" class="form-control"  name="apellido" value="   <?php echo $usu_apellido; ?>">
        </div>
         <div class="form-group">
          <input type="text" class="form-control"  name="telefono" value="  <?php echo $usu_telefono; ?>">
        </div>
         <div class="form-group">
          <input type="text" class="form-control"  name="departamento" value="  <?php echo $dep_cod; ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control"  name="perfil" value="    <?php echo $per_cod; ?>">
        </div>




<?php } ?>
<button type="submit" class="btn btn-default">Enviar</button>
</form>

	</div>
	</div>
	</div>

<br>
<br>


<?php require("../resourse/footer.php"); ?>
</body>
</html>