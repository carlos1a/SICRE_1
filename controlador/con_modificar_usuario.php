<?php
	require ('../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();


	$usu_nombre=	trim($_POST['nombre']);
	$usu_apellido=	trim($_POST['apellido']);
	$usu_cedula=		trim($_POST['cedula']);
	$usu_telefono=	trim($_POST['telefono']);
	$usu_correo=		trim($_POST['correo']);
	$dep_cod=		trim($_POST['departamento']);
	$per_cod=		trim($_POST['cargo']);
	require ('../modelo/mod_usuario.php');

	$usuario = new usuario();

			$inserto=$usuario->modificar($usu_nombre,$usu_apellido, $usu_cedula,$usu_telefono,$usu_correo,$dep_cod, $per_cod, $pgconn);

			if($inserto==true){


				header("Location: ../vista/usuario/consultar_usuario.php");



		}
			/*else{

				echo"no resgistrado";
				//header("Location: ../vistas/empleados/vis_empleadoRegistrado.php");
			}
		/*}else{
			$actualizar=$objEmpleado->modificar($emp_nombre,$emp_apellido,$emp_cedula,$emp_telefono,$emp_turno,$emp_correo,$emp_login,$emp_clave,$car_cod,$emp_codigo,$pgconn);
			if($actualizar==true){
				header("Location: ../vistas/empleados/vis_empleadoRegistrado.php?Emp=".$emp_codigo);
			}
			else{
				header("Location: ../vistas/empleados/vis_empleadoRegistrado.php");
			}*/

