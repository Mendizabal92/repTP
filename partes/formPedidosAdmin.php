<?php 

	require_once("clases/accesoDatos.php");
	require_once("clases/pedido.php");

	$arrayDePedidos=pedido::traerTodos();

	$idUsuario = $_SESSION['idUsuario'];


?>

<div id="formPedidos" class="container">
<table class="table table-hover" >
	<thead>
		<tr>
			<th>Fecha Entrega</th><th>Entrega</th><th>Provincia</th><th>Localidad</th><th>Direccion</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDePedidos as $ped) {
	echo"<tr>				
			<td>$ped->fechaEntrega</td>
			<td>$ped->entregaPedido</td>
			<td>$ped->provincia</td>
			<td>$ped->localidad</td>
			<td>$ped->direccion</td>
			<td><a onclick='verPedidoProductosAgregados($ped->idPedido)' class='btn btn-success'>   <span class='glyphicon glyphicon-plus'>&nbsp;</span>Productos</a></td>		
			<td><a onclick='verUsuario($ped->idUsuario)' class='btn btn-primary'>   <span class='glyphicon glyphicon-plus'>&nbsp;</span>Cliente</a></td>	
			<td><a onclick='borrarPedidoAdmin($ped->idPedido)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>	
		</tr>   ";
}
		 ?>
	</tbody>
</table>