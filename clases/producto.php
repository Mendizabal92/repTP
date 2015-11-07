<?php

	class producto
	{		
		public $nombreProd;
		public $precio;
		public $idProducto;

		public function guardarProducto()
		 {

		 	if($this->idProducto>0)
		 	{
		 		$this->ModificarProd();
		 	}
		 	else 
		 	{
		 		$this->insertarProducto();
		 	}

		 }
		
		
		public static function traerTodos()
		{
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta('CALL traerTodosProductos()');
			$consulta->execute();				
			return $consulta->fetchAll(PDO::FETCH_CLASS, "producto");	

		}

		public function insertarProducto()
		{			
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta("CALL insertarProducto('$this->nombreProd', '$this->precio')");								
			$consulta->execute();			
			$id=$consulta->fetch(PDO::FETCH_OBJ);			
			return $id->ultimoId;
		}

		public function TraerUnProducto($id)
		{
			$objetoAccesoDato = accesoDatos::dameAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL traerUnProducto($id)");
			$consulta->execute();
			$prodBuscado= $consulta->fetchObject('producto');
			return $prodBuscado;				
		}


		public function ModificarProd()
		 {

			$objetoAccesoDato = accesoDatos::dameAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL modificarProducto('$this->nombreProd', '$this->precio', '$this->idProducto')");
			$consulta->execute();
		 }


		public static function borrarProd($id)
		{
			$objetoAccesoDato = accesoDatos::dameAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL borrarProducto($id)");
			$consulta->execute();
		}		

	}

?>