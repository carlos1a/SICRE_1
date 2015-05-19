<?php
	$emp_ced = $_POST['cedula'];
	$emp_cla = md5 ($_POST['clave']);
   	$_SESSION['emp_ci'] = $emp_ci;
   	$_SESSION['emp_clave']  = $emp_clave;

	require ('../../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

	require ('../../modelo/mod_empleado.php');
		$instanciar = new empleado();
		$columna = $instanciar->autenticar($emp_ced,$emp_clave,$pgconn);

	if(pg_num_rows ($columna)>0){
		session_start();
		$row = pg_fetch_array($columna,0,PGSQL_ASSOC);
		$_SESSION["emp_ci"]=$row["emp_ci"];
		$_SESSION["emp_clave"]=$row["emp_clave"];
		$_SESSION["tipemp_cod"]=$row["tipemp_cod"];
		header("Location: ../../vista/empleado/inicio.php");
	}
	else{
		$alerta = "Problemas al iniciar sesión";
		header("Location: ../../vista/error.php?alerta=$alerta");
	}
	if($mensaje!="") { echo $mensaje;}
?>