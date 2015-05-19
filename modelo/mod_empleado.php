<?php
class empleado{ //Abro clase empleado
	private $emp_ci;
	private $emp_nom;
	private $emp_ape;
	private $emp_cor;
	private $emp_tel;
	private $emp_clave;
	private $emp_fe;
	private $tipo_empe;
	private $est_cod;
	private $dis_cod;
	private $pgconn;

//Función agregar
	public function agregar($emp_ci, $emp_nom, $emp_ape, $emp_cor, $emp_tel, $tipo_empe, $emp_clave, $emp_fe,  $est_cod, $dis_cod, $pgconn)
	{
		$query = "INSERT INTO empleado (emp_ci, emp_nom, emp_ape, emp_cor, emp_tel, tipo_empe, emp_clave, emp_fe, est_cod, dis_cod)
		VALUES ('$emp_ci', '$emp_nom', '$emp_ape', '$emp_cor', '$emp_tel', '$tipo_empe', md5('$emp_clave'), '$emp_fe', '$est_cod', '$dis_cod')";
		$consulta= pg_query($pgconn,$query) or die ("Error al agregar: ".pg_last_error($consulta));
		return $consulta;
	}//Cierro función agregar

//Función autenticar
		public function autenticar($emp_ci, $emp_clave, $pgconn)
	{
		$query= "SELECT * FROM empleado WHERE emp_ci='$emp_ci' AND emp_clave='$emp_clave'	";
		$consulta= pg_query($pgconn, $query) or die ("CONSULTA ERRADA: ".pg_last_error($consulta));

		if($consulta)
		{//Abro if autenticar
		return $consulta;
		}//Cierro if autenticar
	}//Cierro función autenticar

//Función actualizar
		public function actualizar($emp_log,$emp_cla,$pgconn)
	{
		$query= "UPDATE empleado SET emp_cla=md5('$emp_cla') where emp_log='$emp_log'";
		$consulta= pg_query($pgconn, $query) or die ("Error al actualizar: ".pg_last_error($pgconn));
		if($consulta)
		{//Abro if actualizar
		return ($consulta);
		}//Cierro if actualizar
	}//Cierro función actualizar

//Función buscar
		public function buscar($emp_ced, $pgconn)
		{//Abro función buscar
		$query= "SELECT empleado.*, tipo_empleado.tipemp_des, estatu.est_des FROM empleado, tipo_empleado, estatu WHERE emp_ced='$emp_ced' AND empleado.tipemp_cod = tipo_empleado.tipemp_cod AND empleado.est_cod = estatu.est_cod";
		$consulta= pg_query($pgconn, $query) or die ("Error al buscar: ".pg_last_error($pgconn));
		if($consulta)
		{//Abro if
			return ($consulta);
			}//Cierro if
		}//Cierro función buscar

//Función lista
		public function lista($pgconn)
		{
			$query= "SELECT empleado.*, tipo_empleado.tipemp_des, estatu.est_des FROM empleado, tipo_empleado, estatu WHERE empleado.tipemp_cod = tipo_empleado.tipemp_cod AND empleado.est_cod = estatu.est_cod ORDER BY emp_ced ASC";
			$consulta= pg_query($pgconn, $query) or die ("Error al listar: ".pg_last_error($consulta));
		if($consulta)
			{//Abro if
			return ($consulta);
			}//Cierro if
		}//Cierro función

//Función mostrar
	public function mostrar($pgconn)
	{
		$query= "SELECT emp_nom, emp_ape , emp_ci, emp_clave FROM empleado ORDER BY emp_cod DESC LIMIT 1";
		$consulta= pg_query($pgconn, $query) or die ("Error al mostrar: ".pg_last_error($consulta));
		if($consulta)
		{
			return ($consulta);
		}//Cierro if
	}//Cierro función mostrar


}//Cierro clase empleado
?>