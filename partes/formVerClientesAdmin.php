<?php 

	require_once("clases/accesoDatos.php");
	require_once("clases/pedido.php");

	$arrayDeUsuarios=usuario::traerTodos();
	
?>

<div id="formPedidos" class="container">
<table class="table table-hover" >
	<thead>
		<tr>
			<th>Nombre</th><th>Email</th><th>Foto</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDeUsuarios as $us) {
	echo"<tr>				
			<td>$us->nombre</td>
			<td>$us->email</td>
			<td><img style='width:100px;height:100px;' src='fotos/$us->foto' /></td>
			<td><a onclick='verPedidosAdmin($us->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Pedidos</a></td>					
		</tr>   ";
}
		 ?>
	</tbody>
</table>

