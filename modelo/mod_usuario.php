<?php
class usuario
{

	private $usu_nombre;
   	private $usu_apellido;
   	private $usu_cedula;
   	private $usu_clave;
    	private $usu_telefono;
    	private $usu_correo;
    	private $dep_cod;
    	private $per_cod;
          private $pgconn;


public function mostrar($pgconn){
		$query= "SELECT usu_nombre, usu_apellido , usu_cedula, usu_telefono, dep_cod, per_cod FROM usuario ORDER BY usu_cedula desc LIMIT 1";
		$consulta= pg_query($pgconn, $query) or die ("Consulta Errónea: ".pg_last_error());
		if($consulta){
			return ($consulta);
			}// if mostrar
		}//class mostrar

    public function agregar($usu_nombre, $usu_apellido, $usu_cedula, $usu_clave, $usu_telefono,$usu_correo,$dep_cod, $per_cod, $pgconn)
	{
		$query = "INSERT INTO usuario (usu_nombre,usu_apellido, usu_cedula, usu_clave, usu_telefono,usu_correo,dep_cod, per_cod)
				VALUES('$usu_nombre','$usu_apellido', '$usu_cedula', MD5('$usu_clave'), '$usu_telefono','$usu_correo','$dep_cod', '$per_cod')";
		$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
		return $consulta;
    }


    public function modificar($usu_nombre,$usu_apellido, $usu_cedula,$usu_telefono,$usu_correo,$dep_cod, $per_cod, $pgconn)
	{
		$query = "UPDATE usuario SET usu_nombre='$usu_nombre',usu_apellido='$usu_apellido', usu_telefono='$usu_telefono', usu_correo='$usu_correo'
				 WHERE usu_cedula='$usu_cedula'";
		$rec = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
		if ($rec)
        {
			return "ok";
		}
		else
		{
			return "nok";
		}

    }
    public function eliminar($cod_cuestionario,$cod_aspecto,$pgconn)
	{
		$query = "DELETE FROM empleado WHERE emp_cod='$emp_cod'";
		$eliminar = pg_query($query);
		if($eliminar)
			return "ok";
    }

    public function consultar($pgconn)
    {
 		$query = "SELECT * FROM empleado";
		$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
	}

    public function obtener($pgconn)
    {
 		$query = "SELECT U.*,D.*, P.* from usuario U JOIN departamento D ON U.dep_cod=D.dep_cod join perfil P on U.per_cod=P.per_cod order by usu_cedula desc LIMIT 1 ";
		$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
	}
  public function obtener_cedula($usu_cedula,$pgconn)
    {
 		$query = "SELECT U.*,D.*, P.* from usuario U JOIN departamento D ON U.dep_cod=D.dep_cod join perfil P on U.per_cod=P.per_cod WHERE usu_cedula='$usu_cedula' ";
		$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
	}

    public function buscar($usu_cedula,$pgconn)
    {
 		$query = "select * from usuario WHERE usu_cedula='$usu_cedula'";
		$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
	}

    public function obtenerPorCreacion($emp_creacion,$pgconn)
    {
 		$query = "select emp_cod from empleado WHERE emp_creacion='$emp_creacion'";
		$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
	}



	public function autenticar($usu_cedula,$usu_clave,$pgconn){
 		$query = "select * from usuario WHERE usu_cedula='$usu_cedula'
				  AND usu_clave=md5('$usu_clave')";
		$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
	}

    public function listar($pgconn)
    {
 		$query = "SELECT P.per_nombre as perfil, U.* , D.dep_nombre as dep FROM usuario U join departamento D on U.dep_cod=D.dep_cod  join perfil P on U.per_cod=P.per_cod ORDER BY usu_cedula ASC LIMIT 10";
		$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
	}

}
?>