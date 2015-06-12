<?php
function p ($consulta){

		if(pg_num_rows($consulta)>0){
		session_start();
		$row = pg_fetch_array($consulta,0,PGSQL_ASSOC);
		$_SESSION["usu_cedula"]=$row["usu_cedula"];
		$_SESSION["usu_clave"]=$row["usu_clave"];


return true;

}else return false;}//fin funcion p

	$usu_cedula 			  = $_POST['cedula'];
	$usu_clave 			  = $_POST['clave'];
   	$_SESSION['cedula'] 	  = $usu_cedula;
   	$_SESSION['clave']   	  = $usu_clave;


	require('../../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn= $conexion->conectar();


		require('../../modelo/mod_usuario.php');
		$usuario = new usuario();
		$consulta = $usuario->autenticar($usu_cedula, $usu_clave,$pgconn);

if(p($consulta)==true){

header("Location: ../../vista/usuario/inicio.php");
}

else{echo "sus datos no coinciden";
	}
	/*if($mensaje!="") { echo $mensaje;}*/
?>