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
<header align="center"><h2>Usuario Registrado Exitosamente en el <br> SICRE</h2> </header>

<div class="form-group">
<?php
require("../controlador/con_lista_usu.php");
?>




	<p class="text-info" align="center"> Preciona <a href="../index.php">SALIR</a> para que puedas iniciar session e ingresar al Sistema Central de Reportes</p>

</div>


<?php require("../resourse/footer.php"); ?>
</body>
</html>