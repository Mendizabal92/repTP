
	function insertarProductos()
	{
		var varNombre = $("#nombreProd").val();
		var varPrecio = $("#precioProd").val();
		var varId = $("#idProd").val();

		var funcionAjaxInsertar=$.ajax
		({
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"InsertarProducto",
				nombreProd: varNombre,
				precioProd: varPrecio,
				idProd:varId
			}
		});				

		funcionAjaxInsertar.done
		(
			function(retorno)
			{				
				verProductos();
			}
		);	

	}

		

	function EditarProd(idEd)
	{		
		nuevoProducto();		
		var funcionAjax=$.ajax
		({
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"TraerProd",
				id:idEd
			}
		

		});

		
		funcionAjax.done
		(
			function(retorno)
			{	
				
				var prod =JSON.parse(retorno);	
				$("#nombreProd").val(prod.nombreProd);
				$("#precioProd").val(prod.precioProd);	
				$("#idProd").val(prod.idProducto);		
			}
		);	

		//nuevoProducto();
	
	}


	function BorrarProd(idEd)
	{					
		var funcionAjax=$.ajax
		({
			url:"nexo.php",
			type:"post",
			data:
			{
				queHacer:"borrarProd",
				id:idEd
			}

		});

		funcionAjax.done
		(
			function(retorno)
			{				
				verProductos();
			}
		);

	}


	







		


