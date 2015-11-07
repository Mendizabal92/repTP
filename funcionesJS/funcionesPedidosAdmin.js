
	function verPedidos()
		{
			var funcionAjaxPedidosAdmin=$.ajax
			({
				url:"nexo.php",
				type:"post",
				data:
				{
					queHacer:"traerPedidosAdmin"
				}
			});

			funcionAjaxPedidosAdmin.done
			(
				function(retorno)
				{
					$("#principal").html(retorno);
					$("#prodPedidos").html('');
				}
			)
		}

	function borrarPedidoAdmin(idPed)
		{			
			var varIdPed = idPed;
					
			cambiarIdPedido(varIdPed);

			var funcionAjaxBorrarPedido=$.ajax
			({
				cache:false,	
				url:"nexo.php",
				type:"post",
				data:
				{
					queHacer:"borrarPedidoAdmin"											
				}
			});					

			funcionAjaxBorrarPedido.done
			(
				function(retorno)
				{
					verPedidos();
					$("#prodPedidos").html('');
				}
			)				
		}

	function verClientes()
		{

			var funcionAjaxVerClientes=$.ajax
			({
				url:"nexo.php",
				type:"post",
				data:
				{
					queHacer:"verClientes"
				}

			});

			funcionAjaxVerClientes.done
			(
				function(retorno)
				{
					$("#principal").html(retorno);
					$("#prodPedidos").html('');
				}
			);
		}

	function verPedidosAdmin(idUs)
		{		
			var varIdUsuario = idUs;				

			var funcionAjaxTraerPedido=$.ajax
			({
				cache:false,			
				url:"nexo.php",
				type:"post",
				data:
				{
					queHacer:"traerPedidoUsuarioAdmin",
					idUsuario:varIdUsuario
				}
			});

			funcionAjaxTraerPedido.done
				(				
					function(retorno)
					{													
						$("#principal").html(retorno);	
						$("#prodPedidos").html('');				
					}
				);
			
		}

	function detallesPedidoAdmin(idPed)
		{
			var varIdPed = idPed;
			
			cambiarIdPedido(varIdPed);

			var funcionAjaxProdPed=$.ajax
					({					
						cache:false,	
						url:"nexo.php",
						type:"post",
						data:
						{
							queHacer:"MostrarProductosPedidoAgregadosAdmin",								
						}

					});


					funcionAjaxProdPed.done
					(			
						function(retorno)
						{					
							$("#prodPedidos").html(retorno);															
						}
					);
			
		}