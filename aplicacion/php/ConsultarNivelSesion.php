<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	
//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(empty($_SESSION["usuario"])){
		header("Location: ../index.php");
	}
	$nivel =$_SESSION["nivel"];
	$json = array();

	$json[] = array(
	 'nivel' => $nivel
	);

	$jsonstring = json_encode($json);
	echo $jsonstring;

  
?>
