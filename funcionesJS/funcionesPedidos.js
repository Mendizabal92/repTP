function insertarPedido()
	{	

		var varFecha = $("#fechaEntrega").val();
		var varEntrega;
		var varProvincia = $("#provPedido").val();
		var varLocalidad = $("#locPedido").val();
		var varDomicilio = $("#domicPedido").val();
		var varIdUsuario = $("#idUsuario").val();

		if (document.getElementById('entrega').checked) 
		{
			varEntrega = "si";
		}
		else
		{
			varEntrega = "no";
		}

		var funcionAjaxInsertarPedido=$.ajax
		({
			cache:false,
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"InsertarPedido",
				fechaPedido:varFecha,
				entregaPedido:varEntrega,
				provPedido:varProvincia,
				localPedido:varLocalidad,
				domicPedido:varDomicilio,
				idUsuario:varIdUsuario

			}

		});		

		funcionAjaxInsertarPedido.done
		(			

			function(retorno)
			{							
				$("#prodPedidos").html('');				
				verProductosPed(retorno);
				
			}			
		);
		
	}

function AgregarProd(idP)
	{
		var varIdProd = idP;
		var varIdPedido = $("#idPedido").val();		
		var varCantidad = $("#"+varIdProd).val();


		var funcionAgregarProdAjax = $.ajax
		({
			cache:false,
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"cantProducto",
				idPedido:varIdPedido,
				idProducto:varIdProd,
				cantidad:varCantidad
			}

		});

		funcionAgregarProdAjax.done
		(
			function(retorno)
			{
				$("#"+varIdProd).val('');
				verPedidoProductosAgregados(varIdPedido);
			}

		);

	}

function BorrarPedidoProd(idP)
	{
		alert("borrar");
		

	}


function verPedidoProductosAgregados(idPed)
	{
			var varIdPedido = idPed;

			cambiarIdPedido(idPed);
			
			var funcionAjaxProdPed=$.ajax
			({					
				cache:false,	
				url:"nexo.php",
				type:"post",
				data:
				{
					queHacer:"MostrarProductosPedidoAgregados",
					idPedido: varIdPedido			
				}

			});

			funcionAjaxProdPed.done
			(
				
				function(retorno)
				{								
					$("#idPedido").val(varIdPedido);
					$("#prodPedidos").html(retorno);	
					
				}
			);
	}
	

function insertarProdPedido(idPed)
	{
		var varIdPedido = idPed;

		var funcionAjaxInsertarProdPedido=$.ajax
		({
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"insertarProdPedido",

			}

		});
	}


function verProductosPed(idPedido)
	{							

		var varIdPedido = idPedido;		
		
		var funcionAjaxProdPed=$.ajax
		({					
			cache:false,	
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"MostrarProductosPedido",
				idPedido:varIdPedido
			}

		});


		funcionAjaxProdPed.done
		(
			function(retorno)
			{				
				$("#principal").html(retorno);	
				$("#idPedido").val(varIdPedido);	
				
			}
		);

	}

function verPedido(idUs)
	{

		var varIdUsuario = idUs;		

		var funcionAjaxTraerPedido=$.ajax
		({
			cache:false,			
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"traerPedidoUsuario",
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

function detallesPedido(idPed)
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
						queHacer:"MostrarProductosPedidoAgregados",								
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

function cambiarIdPedido(idPed)
	{
		var varIdPedido = idPed;


		var funcionAjaxIdPedido=$.ajax
		({
			type:"post",
			url:"nexo.php",
			data:
			{
				queHacer:"cambiarIdPedido",
				idPedido:varIdPedido
			}
		});

	}

function borrarPedido(idPed, idUs)
	{

		var varIdPed = idPed;
		var varIdUsuario = idUs;

		cambiarIdPedido(varIdPed);

		var funcionAjaxBorrarPedido=$.ajax
		({
			cache:false,	
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"borrarPedido"											
			}
		});		


		funcionAjaxBorrarPedido.done
		(
			function(retorno)
			{
				verPedido(varIdUsuario);
			}
		)				
	}







