<?php

	class pedidoProducto
	{		
		public $idPedido;
		public $idProducto;
		public $idPedidoProducto;
		public $cantidad;
		/*public $nombreProd;
		public $precioProd;*/


		public function pedidoProducto()
		 {

		 	if($this->dPedidoProducto>0)
		 	{
		 		$this->ModificarPedidoProducto();
		 	}
		 	else 
		 	{
		 		$this->insertarPedidoProducto();
		 	}

		 }
				
		public static function traerTodos($id)
		{						
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta('CALL traerTodosPedidosProducto(:id)');
			$consulta->bindValue(':id', $id, PDO::PARAM_INT);
			$consulta->execute();						
			return $consulta->fetchAll();	
		}


		public function insertarPedidoProducto()
		{			
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta("CALL insertarPedidoProducto('$this->idPedido', '$this->idProducto', '$this->cantidad')");		
			$consulta->execute();	
		}

		public function traerUnPedidoProducto($id)
		{
			$objetoAccesoDato = accesoDatos::dameAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL traerUnPedidoProducto($id)");
			$consulta->execute();
			$pedidoProdBuscado= $consulta->fetchAll(PDO::FETCH_CLASS, "pedidoProducto");
			return $pedidoProdBuscado;				
		}


		public function ModificarPedidoProducto()
		{

			$objetoAccesoDato = accesoDatos::dameAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL modificarPedidoProducto
				('$this->idPedido', '$this->idProducto', '$this->cantidad')");
			$consulta->execute();
		}


		public static function borrarPedidoProducto($id)
		{
			$objetoAccesoDato = accesoDatos::dameAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL borrarPedidoProducto($id)");
			$consulta->execute();
		}		

	}

?>