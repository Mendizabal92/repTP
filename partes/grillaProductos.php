<?php 

	require_once("clases/accesoDatos.php");
	require_once("clases/producto.php");

	$arrayDeProductos=producto::traerTodos();


?>

<div id="formPedidos" class="container">
<table class="table table-hover" >
	<thead>
		<tr>
			<th>Nombre</th><th>Precio</th><th>Editar</th><th>Borrar</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDeProductos as $prod) {
	echo"<tr>			
			<td>$prod->nombreProd</td>
			<td>$prod->precioProd</td>
			<td><a onclick='EditarProd($prod->idProducto)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarProd($prod->idProducto)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>



