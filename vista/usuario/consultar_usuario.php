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
<p class="lead"  align="center">En esta seccion podras verificar los ultimos 10 usuarios registrado en el SICRE, asi como buscar algun usuario especifico, con solo colocar en el buscador el numero de cedula del usuario</p>
</div>


<div class="form-group">
<?php
require("../../controlador/con_lista_usu.php");
?>
<br>
<br>
</div>

<div class="container">
<div class="row" >
<div class="col-md-12">

<p class="lead"  align="center">Ultimos 10 Usuarios Registrados en el SICRE</p>
<br>
<!--inicio de la tabla-->
<div class="panel panel-default">
<table class="table">
    <thead>
        <tr>

            <th>Nombre </th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Departamento</th>
            <th>Cargo</th>
        </tr>
    </thead>

<?php
	for($i=0;$i<pg_num_rows($consulta);$i++){
	# code...

 ?>
    <tbody>
        <tr>
            <td> <?php echo $usu_nombre [$i] ; ?> </td>
            <td><?php echo $usu_apellido[$i]; ?></td>
            <td><?php echo $usu_cedula[$i]; ?></td>
            <td><?php echo $usu_telefono[$i]; ?></td>
            <td><?php echo $dep_cod[$i]; ?></td>
            <td><?php echo $per_cod[$i]; ?> </td>
            <td> <a href="modificar_usuario.php?param_id=<?php echo base64_encode($usu_cedula[$i]);?>">
                <button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button></a></td>


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