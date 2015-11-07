<?php 

	session_start();
	require_once("../clases/usuario.php");
	require_once("../clases/accesoDatos.php");

	$usuarioActual= usuario::validarusuario($_POST['correo'],$_POST['clave']);

	
	/*

	if(usuario::validarusuario($_POST['correo'],$_POST['clave']))
	*/
	if($usuarioActual!=null)
	{
		$nombre=$usuarioActual->nombre;
		
		setcookie("registro", $_POST['correo'], time()+36000, '/');

		$_SESSION['usuarioActual']=$_POST['correo'];	

		$_SESSION['idUsuario']=$usuarioActual->id;	
		
		echo $nombre;

	}else
	{
		echo "No-esta";
	}

?>