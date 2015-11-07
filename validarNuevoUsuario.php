<?php
session_start();
require_once"clases/usuario.php";
require_once"clases/AccesoDatos.php";

 
 

if(isset($_POST['correo']) && isset($_POST['clave']) && isset($_POST['nombre']))
    {     
       
        $_SESSION['usuarioActual']=$_POST['correo'];
        $email = $_POST['correo'];

        //
        $ruta=getcwd();  //ruta directorio actual
        $rutaDestino=$ruta."/Fotos/";
        $NOMEXT=explode(".", $_FILES['fichero0']['name']);
        $EXT=end($NOMEXT);
        $nomarch=$NOMEXT[0].".".$EXT;  // no olvidar el "." separador de nombre/ext
        $rutaActual = $ruta."/FotosTemp/".$nomarch;
        $nuevoNombreDeFoto = $email.".".$EXT;
        //Renombro con el email/usuario
        rename ($ruta."/FotosTemp/".$nomarch,$ruta."/FotosTemp/".$nuevoNombreDeFoto);
        $rutaActual = $ruta."/FotosTemp/".$nuevoNombreDeFoto;
        /*echo $nomarch;
        echo "  </br>";
        echo $rutaActual;
         echo " </br>";
        echo $rutaDestino.$nuevoNombreDeFoto;
         echo " </br>";*/
        //Muevo a carpeta Fotos
        rename($rutaActual,$rutaDestino.$nuevoNombreDeFoto);
        //

        $usuario= new usuario();        
        $usuario->nombre=$_POST['nombre'];
        $usuario->mail=$_POST['correo'];
        $usuario->clave=$_POST['clave'];
        $usuario->foto=$nuevoNombreDeFoto;
        $idUsuario = $usuario->insertarUsuario();

        $_SESSION['idUsuario']=$idUsuario;


        echo $usuario->nombre;
        //Guardar usuario en BD        
        
    }
    
    else
    {
        echo "Error: Debe ingresar todos los campos";
    }
    
?>