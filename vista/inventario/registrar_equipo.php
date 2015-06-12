 <?php
 require("../../bootstrap/boots.php");
 require("../../controlador/session/sesion.php");

 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">

 	<title>Registro de Inventatrio</title>
 	<header align="center"><h2>Registro de Equipos en el Inventario <br> SICRE</h2>
 		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 		<script type="text/javascript">
 			$("document").ready(function(){
 				$("#in_niv1").load("../../controlador/con_lista_dependiente.php?cmd=in_nivel1")
 				$("#in_niv1").change(function(){
 					$("#in_niv3").empty();
 					var id = $("#in_niv1").val();
 					$.get("../../controlador/con_lista_dependiente.php?cmd=in_nivel2",{param_id:id})
 					.done(function(data){
 						$("#in_niv2").html(data);
 					})
 				})
					/*$("#in_niv2").change(function(){
					var id = $("#in_niv2").val();
					$.get("../controlador/con_dependientes.php?cmd=in_nivel3",{param_id:id})
					.done(function(data){
						$("#in_niv3").html(data);
					})
 		})*/
 		})
 		</script>
 	</header>

 	<div class="container-fluid">
 		<div class="row" >
 			<div class="col-xs-12 col-md-12 col-lg-12" >
 				<form class="form-inline" role="form"  action="../controlador/inventario" method="POST" >


 					<div class="form-group">
 						<label for="" class="sr-only">Equipo:</label>
 						<select class="form-control"  id="in_niv1"  required ></select>
 					</div>

 					<div class="form-group">
 						<label for="" class="sr-only">Tipo de Equipo:</label>
 						<select class="form-control"  id="in_niv2"  required ></select>

 					</div>

 					<div class="form-group">
 						<label for="" class="sr-only">Serial:</label>

 						<input type="text" title="Su Apellido No puede poseer espacios en blancos ni caracteres especiales" class="form-control" pattern="[a-zA-Z]+" placeholder="Serial" name="apellido" required autofocus maxlength="15">

 					</div>


 					<div class="form-group">
 						<label for="cedula" class="sr-only">Marca:</label>

 						<input type="text" title="Su cedula debe contener entre 7 y  8 numeros sin espacios ni letras" pattern="[0-9]{7,8}" class="form-control" placeholder="Marca" name="cedula" required autofocus maxlength="8">

 					</div>

 					<div class="form-group">
 						<label for="" class="sr-only">Modelo:</label>

 						<input type="text" title="Su nombre No puede poseer espacios en blancos ni caracteres especiales" class="form-control" pattern="[a-zA-Z]+" placeholder="Modelo" name="nombre" required autofocus maxlength="15">

 					</div>



 					<div class="form-group">
 						<label for="" class="sr-only">Precio:</label>

 						<input type="password" title="Su clave debe contener letras, numeros y al menos un caracter especial y debe " class="form-control"  pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{6,15}" placeholder="00.00 Bsf" name="clave" required autofocus maxlength="15">

 					</div>

 					<div class="form-group">
 						<input type="" class="form-control" name="fecha" readonly="true" value="<?php echo date ("d-m-Y"); ?>">

 					</div>

 					<div class="form-group">
 						<input type="text" title="" class="form-control" pattern="[a-zA-Z]+" placeholder="Usuario" name="telefono" required autofocus maxlength="10" readonly="true" value="<?php echo $_SESSION['usu_cedula']; ?>">
 					</div>

 				</div>
 				<div class="col-md-2 col-md-offset-5">
 					<button class="btn btn-lg btn-primary btn-block " type="submit">Guardar</button>
 				</div>
				</form>
			</div>
		</div>
 	</div>
 	<br />


 <?php require("../../resourse/footer.php"); ?>

</body>

</html>