<?php
	require_once('../modelo/mod_connex.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();

	require('../modelo/mod_usuario.php');
	$usuario = new usuario();
	$consulta=$usuario->listar($pgconn);

	for($i=0;$i<pg_num_rows($consulta);$i++){
	$row = pg_fetch_array($consulta,$i,PGSQL_ASSOC);
	$usu_nombre=$row["usu_nombre"];
	$usu_apellido=$row["usu_apellido"];
	$usu_cedula=$row["usu_cedula"];
	$usu_telefono=$row["usu_telefono"];
	$dep_cod=$row["dep_cod"];
	$per_cod=$row["per_cod"];
}
