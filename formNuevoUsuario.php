<html>

    <head>


    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


      <script src="js/jquery.form.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/jsRegistroJquery.js"></script>


    <script type="text/javascript" src="funcionesJS/funcionesAjax.js"></script>
    <script type="text/javascript" src="funcionesJS/funcionesLogin.js"></script>
    <script type="text/javascript" src="funcionesJS/funcionesABM.js"></script>


    </head>

    <body>

        <div class="container">

            <div class="page-header">
              
              <a class="btn btn-danger" href="index.php" role="button">Log In</a>
              
            </div>

            <div class="jumbotron">

              <div class="panel panel-primary">

                <div id="frmRegistro" class="container">


                   <form  class="form-ingreso" method="post" onsubmit="validarNuevoUsuario()" >
                      <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
                      <label for="nombre" class="sr-only">Nombre</label>
                      <input type="text" id="nombre" class="form-control" placeholder="Nombre" required="" autofocus="" value="">
                      
                      <br>
                      
                      <label for="correo" class="sr-only">Correo electrónico</label>
                      <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required="" autofocus="" value="">
                      
                      <br>
                      
                      <label for="clave" class="sr-only">Clave</label>
                      <input type="password" id="clave" minlength="4" class="form-control" placeholder="Clave" required="">
                      
                      <br>

                      <input class="form-control btn btn-info"  name="fichero" type="file" id="fichero"></p>
                      <span id="error" class='error1' style="display: none;"></span>
                      <img  name="imagen" id="imagen" src="" alt="Imagen aqui" width="280" height="250">
                      
                      <div class="checkbox">
    
                      <label>
                        <input type="checkbox" id="recordarme" checked>Recordame
                      </label>   

                 </div>
        
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
   
                     </form>


                </div> <!-- /container -->

                
              </div>  <!--panel-->

              </div>  <!--jumbotron-->

            </div> <!--container-->

        </div>
        
    </body>

</html>

















   