
	
	//  PRODUCTOS
	function nuevoProducto()
	{

		var funcionAjax=$.ajax
		({
			url:"nexo.php",
			type:"post",
			data:{queHacer:"NuevoProducto"}
		});

		funcionAjax.done
		(
			function(retorno)
			{
				$("#principal").html(retorno);		
				$("#prodPedidos").html('');		
			}
		);

	}

	function verProductos()
	{			
		var funcionVerAjax=$.ajax
		({			
			cache:false,
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"MostrarProductos"
			}

		});		

		funcionVerAjax.done
		(
			function(retorno)
			{
				
				$("#principal").html(retorno);	
				$("#prodPedidos").html('');				
			}
		);
	}



	//PEDIDOS

	function nuevoPedido()
	{											

		var funcionAjax=$.ajax
		(

			{				
				cache:false,
				url:"nexo.php",
				type:"post",
				data:{queHacer:"NuevoPedido"}
			}
		);

		funcionAjax.done
		(
			function(retorno)
			{
				$("#principal").html(retorno);
				$("#prodPedidos").html('');
			}
		);
	}


	


	function verPedidos()
	{
		alert("pedidos");
	}

	function verClientes()
	{
		alert("clientes");
	}