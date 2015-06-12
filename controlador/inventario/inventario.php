<?php
	require ('../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();


	$equi_serial=		trim($_POST['serial']);
	$equi_fecha=		trim($_POST['apellido']);
	$equi_serial=		trim($_POST['cedula']);
	$equi_serial=		trim($_POST['clave']);
	$equi_serial=	trim($_POST['clave_confi']);
	$equi_serial=	trim($_POST['telefono']);
	$equi_serial=		trim($_POST['correo']);
	$equi_serial=		trim($_POST['departamento']);
	$equi_serial=		trim($_POST['cargo']);
	require ('../modelo/mod_usuario.php');

	$usuario = new usuario();
	if($usu_clave!=$usu_clave_confi){
		die("Las claves no coinciden");
	}
	else{
			$inserto=$usuario->agregar($usu_nombre,$usu_apellido, $usu_cedula, $usu_clave,$usu_telefono,$usu_correo,$dep_cod, $per_cod, $pgconn);

			if($inserto==true){


				header("Location: ../vista/usuario/usuario_registrado.php");

			}

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
