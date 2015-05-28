<html>
<head>
<title>pagina</title>
</head>
<body bgcolor="Black">
<font color="Red">
<h1 align="center">Formulario</h1>
<div class="div" align="center">
<form id="miform" >
<p>
Nombre <input type="text" pattern="[a-zA-a]+"required name="nombre" id="nombre" placeholder="nombre"><br></br>

Apellidos <input type="text" pattern="[a-zA-a]+"required name="apellido" id="apellidos" placeholder="apellidos"><br></br>

cedula <input type="text" pattern="[0-9]+"required name="cedula" id="cedula" placeholder="cedula"><br></br>

direccion <input type="text" pattern="[ A-Za-z0-9]+"required name="direccion" id="direccion" placeholder="direccion"><br></br>

telefono <select name="perfil" required ><br></br>>
<option value=""></option>
<option value="1">416</option>
<option value="2">414</option>
<option value="3">412</option>
</select>
<input type="text" pattern="[0-9]+"required name="telefono" id="telefono" placeholder="telefono">
<br>
<br>

Email <input type="email" required name="email" id="email" placeholder="email"><br></br>
<input type="submit" value="Enviar" onClick="enviar()">
<p>
<input type="Submit" value="Cancelar">
</p>

</p>
</form>
</div>
</body>
</html>