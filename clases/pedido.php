<?php

	class pedido
	{		
		public $idPedido;
		public $idUsuario;
		public $fechaEntrega;
		public $entregaPedido;
		public $provincia;
		public $localidad;
		public $direccion;
		

		public function guardarPedido()
		 {

		 	if($this->idPedido>0)
		 	{
		 		$this->ModificarPedido();
		 	}
		 	else 
		 	{
		 		$this->insertarPedido();
		 	}
		 }
		
		
		public static function traerTodos()
		{
			$objetoAcceso = accesoDatos::dameAcceso();
			$consulta = $objetoAcceso->retornarConsulta('CALL traerTodosPedidos()');
			$consulta->execute();				
			return $consulta->fetchAll(PDO::FETCH_CLASS, "pedido");	

		}

		public function insertarPedido()
			{						
				$objetoAcceso = accesoDatos::dameAcceso();
				$consulta = $objetoAcceso->retornarConsulta("CALL insertarPedido
					('$this->fechaEntrega', '$this->entregaPedido', 
					'$this->provincia', '$this->localidad', '$this->direccion', 
					'$this->idUsuario')");					
				$consulta->execute();				
				$id=$consulta->fetch(PDO::FETCH_OBJ);			
				return $id->ultimoId;			
			}

		public function traerPedidosUsuario($id)
			{
				$objetoAccesoDato = accesoDatos::dameAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL traerPedidosUsuario($id)");
				$consulta->execute();
				return $consulta->fetchAll(PDO::FETCH_CLASS, "pedido");
				/*$prodBuscado= $consulta->fetchObject('pedido');
				return $prodBuscado;				*/
			}


		public function ModificarPedido()
			{

				$objetoAccesoDato = accesoDatos::dameAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL modificarPedido('$this->idPedido','$this->fechaPedido', '$this->provPedido', '$this->localPedido', '$this->domicPedido', '$this->idUsuario')");
				$consulta->execute();
			}


		public static function borrarPedido($id)
		{
			$objetoAccesoDato = accesoDatos::dameAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL borrarPedido($id)");
			$consulta->execute();
		}		

	}

?>