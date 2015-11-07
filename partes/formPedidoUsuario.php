<?php 

	require_once("clases/accesoDatos.php");
	require_once("clases/pedido.php");

	$arrayDePedidosUsuario=pedido::traerPedidosUsuario($_SESSION['idUsuario']);

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

foreach ($arrayDePedidosUsuario as $ped) {
	echo"<tr>				
			<td>$ped->fechaEntrega</td>
			<td>$ped->entregaPedido</td>
			<td>$ped->provincia</td>
			<td>$ped->localidad</td>
			<td>$ped->direccion</td>
			<td><a onclick='verProductosPed($ped->idPedido)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='borrarPedido($ped->idPedido, $idUsuario)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>	
			<td><a onclick='detallesPedido($ped->idPedido)' class='btn btn-success'>   <span class='glyphicon glyphicon-plus'>&nbsp;</span>Productos</a></td>			
		</tr>   ";
}
		 ?>
	</tbody>
</table>

