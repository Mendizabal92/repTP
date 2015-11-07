<html>


	<head>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


    <script type="text/javascript" src="funcionesJS/funcionesAjax.js"></script>
    <script type="text/javascript" src="funcionesJS/funcionesLogin.js"></script>
    <script type="text/javascript" src="funcionesJS/funcionesABM.js"></script>
    <script type="text/javascript" src="funcionesJS/funcionesPedidos.js"></script>

	</head>


	<body>

		<?php

		session_start();

		require_once("clases/usuario.php");
		require_once("clases/accesoDatos.php");

         if(isset($_SESSION['usuarioActual']))
         {  

         	$nombreUsuario = $_SESSION['usuarioActual'];  
         	$idUsuario = $_SESSION['idUsuario'];         	
         	
         ?>



		<div id="pagewrap">

			<div class="container">

				

					<header id="header">

						<br>
						<br>
						<a class="btn btn-primary " onclick="desloguear()" role="button">Log Out</a>

						<div class="page-header">
			              <h1>Carniceria<small>                  -  TP Lab IV</small></h1>
			            </div>

					</header>

					

			            <ul class="nav nav-tabs">				            
						  <li role="presentation"><a onclick="nuevoPedido()">Nuevo Pedido</a></li>
						  <li role="presentation"><a onclick="verPedido(<?php echo isset($idUsuario) ? $idUsuario: '';?>)">Pedidos</a></li>			  						  
						  <li role="presentation"><a onclick="verPerfil()">Ver Perfil</a></li>		
						</ul>

						<br>

						<div class="jumbotron">

						<div id="content">

							<article  class="post clearfix">

								<div id="principal">

								</div>  <!--principal -->								

							</article>

						</div>  <!--content-->

						</div> <!--jumbotron-->

						<div class="">

						<div id="content">

							<article  class="post clearfix">

								<div id="prodPedidos">

								</div>  <!--principal -->								

							</article>

						</div>  <!--content-->


					

					</div> <!--jumbotron-->

			</div>  <!--container-->

		</div>   <!--pagewrap-->
		

		<?php

		}

		else
		{
			header('Location:index.php');
		}



		?>

		




	</body>


</html>