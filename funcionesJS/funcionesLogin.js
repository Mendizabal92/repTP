function validarLogin()
{

	var varUsuario=$("#correo").val();
	var varClave=$("#clave").val();
	var recordar=$("#recordarme").is(':checked');

	
	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			recordarme:recordar,
			correo:varUsuario,
			clave:varClave
		}
	});


	funcionAjax.done(function(retorno)
	{
			retorno = retorno.trim();
			
			if(retorno=="No-esta")
			{					
				
				$("#informe").html("Usuario o Contraseña incorrecto");

			}else
			{
				if(retorno=="Admin")
				{
					window.location.href = "indexAdmin.html";
				}
				else
				{
					window.location.href = "indexUsuario.php";
				}
			}
	});

		
	}



	function desloguear()
	{
		var funcionAjax=$.ajax
		({
			url:"php/deslogearUsuario.php",
			type:"post"		
		});
		funcionAjax.done(function(retorno)
		{
			window.location.href = "index.php";
			
		});	
	}
	