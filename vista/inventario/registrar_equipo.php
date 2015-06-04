 <?php
 	require("../../bootstrap/boots.php");
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
  	<meta charset="UTF-8">

  <title>Registro de Inventatrio</title>
<header align="center"><h2>Registro de Equipos en el Inventario <br> SICRE</h2> </header>

<div class="container">
<div class="row" >
<div class="col-md-12" >
<form class="form-horizontal" id="form" action="../controlador/con_registrar_usuario.php" method="POST" >


				<div class="form-group">
					<label for="" class="control-label col-md-4">Tipo de Equipo:</label>
						<div class="col-md-6">
							<select class="form-control" name="cargo" required >
							        <option  selected="selected" value="0">Selecione</option>
							        <option value="1">Computadoras</option>
							        <option value="2">Laptop</option>
							        <option value="3">Impresoras</option>
							        <option value="4">Impresora Fiscal</option>
							        <option value="5">Mouse</option>
							        <option value="6">Teclados</option>
							        <option value="7">Disco Duros</option>
							        <option value="8">Tarjeta Madre</option>
							        <option value="9">Memoria Ram</option>
							        <option value="10">Cables de Red</option>
							        <option value="11">Cables Telefonico</option>
							        <option value="12">Telefonos de Oficina</option>
							        <option value="13">Celulares</option>
							        <option value="14">Ups</option>
							        <option value="15">Reguladores de Voltaje</option>
							        <option value="16">otras</option>
							</select>
						</div>
						</div>


				<div class="form-group">
					<label for="cedula" class="control-label col-md-4">Marca:</label>
						<div class="col-md-6">
							<input type="text" title="Su cedula debe contener entre 7 y  8 numeros sin espacios ni letras" pattern="[0-9]{7,8}" class="form-control" placeholder="Ingresa tu Cedula" name="cedula" required autofocus maxlength="8">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Modelo:</label>
						<div class="col-md-6">
							<input type="text" title="Su nombre No puede poseer espacios en blancos ni caracteres especiales" class="form-control" pattern="[a-zA-Z]+" placeholder="Ingresa tu Nombre" name="nombre" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Serial:</label>
						<div class="col-md-6">
							<input type="text" title="Su Apellido No puede poseer espacios en blancos ni caracteres especiales" class="form-control" pattern="[a-zA-Z]+" placeholder="Ingresa tu Apellido" name="apellido" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Precio:</label>
						<div class="col-md-6">
							<input type="password" title="Su clave debe contener letras, numeros y al menos un caracter especial y debe " class="form-control"  pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{6,15}" placeholder="Ingresa tu Clave" name="clave" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Fecha de Registro:</label>
						<div class="col-md-6">
							<input type="password" title="Su clave debe contener letras, numeros y al menos un caracter especial y debe " class="form-control"  pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{6,15}" placeholder="Confirma tu Clave" name="clave_confi" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Registrado por:</label>
						<div  class="col-md-6">
							<input type="text" title="Su telefono debe contener 10 numeros " class="form-control" pattern="[0-9]{10}" placeholder="Ingresa tu Telefono 4161234567" name="telefono" required autofocus maxlength="10">
						</div>
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