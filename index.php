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

  <div id="pagewrap">


        <div class="container">          

            <div class="page-header">
              <h1>Carniceria<small>                  -  TP Lab IV</small></h1>
            </div>

            <div id="content" >

              

            <article  class="post clearfix">
            <div class="jumbotron">

              <div id="informe" role="alert">

              </div>

              <div class="panel panel-primary">
                    <?php                     
                    session_start();
                    if(!isset($_SESSION['usuarioActual'])){  ?>
                          <div id="formLogin" class="container">

                                <form  class="form-ingreso " onsubmit="validarLogin();return false;">
                                  <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
                                      <br>
                                  <label for="correo" class="sr-only">Correo electrónico</label>
                                          <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required="" autofocus="" value="<?php  if(isset($_COOKIE["registro"])){echo $_COOKIE["registro"];}?>">
                                          <br>
                                  <label for="clave" class="sr-only">Clave</label>
                                  <input type="password" id="clave" minlength="4" class="form-control" placeholder="clave" required="">
                                      <div class="checkbox">
                                       
                                        <label>
                                          <input type="checkbox" id="recordarme" checked>Recordame
                                        </label>
                                        
                                      </div>
                                  <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>                        
                             
                                </form>

                          </div> <!-- /container -->

                      <?php }
                      else
                      {

                        if($_SESSION['usuarioActual']=='admin@admin.com')
                        {
                            header('Location:indexAdmin.php');  
                        }
                        else
                        {
                          header('Location:indexUsuario.php');
                        }
                        

                        /*echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";?>         
                        <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
                        */


                       }  ?>


              </div>  <!--panel-->

                         <div class="panel panel-primary">
                             <div id="formLogin" class="container">
                            <h2 class="form-ingreso-heading"></h2>
                            <br>
                            <a class="btn btn-lg btn-primary btn-block" href="formNuevoUsuario.php" role="button">Nuevo Usuario</a>
                            
                            <br>
                            
                        </div>    <!--panel nuevoUsuario-->


                 </div>





            </div>  <!--jumbotron-->

</article>
</div>

            </div> <!--container-->
          
         </div>



</div><!--pageWrap-->




    </body>


</html>