<?php

	session_start();

	require_once("clases/usuario.php");
	require_once("clases/accesoDatos.php");
	require_once("clases/producto.php");
	require_once("clases/pedido.php");
	require_once("clases/pedidoProducto.php");


	$queHago = $_POST['queHacer'];


	switch($queHago)
	{
		
		case 'NuevoProducto':
			include("partes/formNuevoProducto.php");
		break;

		case 'InsertarProducto':
			
			$prod = new producto();
			$prod->nombreProd=$_POST['nombreProd'];
			$prod->precio=$_POST['precioProd'];	
			$prod->idProducto=$_POST['idProd'];		
			$prod->guardarProducto();	
			
		break;

		case 'MostrarProductos':
			include("partes/grillaProductos.php");
		break;

		case 'TraerProd':
			$prod = producto::TraerUnProducto($_POST['id']);		
			echo json_encode($prod) ;
		break;

		case 'borrarProd':
			producto::borrarProd($_POST['id']);
		break;

		case 'NuevoPedido':
			include("partes/formNuevoPedido.php");
		break;

		case 'InsertarPedido':

			$pedNuevo = new pedido();
			$pedNuevo->fechaEntrega=$_POST['fechaPedido'];
			$pedNuevo->entregaPedido=$_POST['entregaPedido'];
			$pedNuevo->provincia=$_POST['provPedido'];
			$pedNuevo->localidad=$_POST['localPedido'];
			$pedNuevo->direccion=$_POST['domicPedido'];			
			$pedNuevo->idUsuario=$_SESSION['idUsuario'];

			$idPedido = $pedNuevo->insertarPedido();			
			echo $_SESSION['idPedido']=$idPedido;			

		break;

		case 'MostrarProductosPedido':
			include("partes/formPedidoProductos.php");
		break;

		case 'cantProducto':			
			$pedProdNuevo = new pedidoProducto();
			$pedProdNuevo->idPedido=$_SESSION['idPedido'];
			$pedProdNuevo->idProducto=$_POST['idProducto'];
			$pedProdNuevo->cantidad=$_POST['cantidad'];			
			
			$idPedidoProducto = $pedProdNuevo->insertarPedidoProducto();
			echo $idPedidoProducto;
							
		break;

		case 'MostrarProductosPedidoAgregados':
			include("partes/formPedidoProductosAgregados.php");
		break;

		case 'traerPedidoUsuario':
			include("partes/formPedidoUsuario.php");
		break;

		case 'cambiarIdPedido':
			$_SESSION['idPedido']=$_POST['idPedido'];
		break;

		case 'borrarPedido':
			pedido::borrarPedido($_SESSION['idPedido']);
		break;

		case 'traerPedidosAdmin':
			include("partes/formPedidosAdmin.php");
		break;

		case 'borrarPedidoAdmin':
			pedido::borrarPedido($_SESSION['idPedido']);
		break;

		case 'verClientes':
			include("partes/formVerClientesAdmin.php");
		break;

		case 'traerPedidoUsuarioAdmin':
			$_SESSION['idUsuario'] = $_POST['idUsuario'];
			echo $_SESSION['idUsuario'];
			include("partes/formVerPedidosAdmin.php");
		break;

		case 'MostrarProductosPedidoAgregadosAdmin':
			$_SESSION['idPedido'] = $_POST['idPedido'];
			include("partes/formPedidoProductosAgregadosAdmin.php");
		break;




		}

?>