<?php
	$usu_cedula=		$_POST['cedula'];
	$usu_clave=		$_POST['clave'];
   $_SESSION['cedula']= 	$usu_cedula;
   $_SESSION['clave'] =	$usu_clave;

	require ('../../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

	require ('../../modelo/mod_usuario.php');
		$instanciar = new usuario();
		$columna = $instanciar->autenticar($usu_cedula,$usu_clave,$pgconn);

	if(pg_num_rows ($columna)>0){
		session_start();
		$row = pg_fetch_array($columna,0,PGSQL_ASSOC);
		$_SESSION["cedula"]=$row["usu_cedula"];
		$_SESSION["clave"]=$row["usu_clave"];
		$_SESSION['perfil']=$row["per_id"];
		header("Location: ../../vista/usuario/inicio.php");
	}
	else{
		$mensaje="Sus datos no coinciden";
	}
	if($mensaje!="") { echo $mensaje;}
?>