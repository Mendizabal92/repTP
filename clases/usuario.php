<?php

	class usuario
	{		
		public $id;
		public $nombre;
		public $mail;
		public $clave;
		public $foto;

		
		public static function traerTodos()
		{
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta('CALL traerTodos()');
			$consulta->execute();				
			return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");	
		}

		public function insertarUsuario()
		{
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta("CALL insertarUsuario('$this->nombre', '$this->mail', '$this->clave', '$this->foto')");			
			$consulta->execute();
			$id=$consulta->fetch(PDO::FETCH_OBJ);			
			return $id->ultimoId;			
		}
				

		public static function validarUsuario($correo, $clave)
		{
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta("CALL validarUsuario(:correo,:clave)");
			$consulta->bindValue(':correo', $correo, PDO::PARAM_STR);
			$consulta->bindValue(':clave', $clave, PDO::PARAM_STR);			
			$consulta->execute();
			$usuario = $consulta->fetchObject('usuario');			
			return $usuario;
		}

		public static function getIdUsuario($correo)
		{
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta("select * from usuarios where email=:correo");
			$consulta->bindValue(':correo', $correo, PDO::PARAM_STR);			
			$consulta->execute();
			$usuario = $consulta->fetchObject('usuario');			
			return $usuario;
		}
	}



?>