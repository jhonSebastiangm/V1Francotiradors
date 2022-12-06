<?php	
	session_start();
	include 'lib/config.php';
	if(!empty($_SESSION["usuario"])){
		header("Location: php/sesion.php");
	}
  function validar ($resultados,$usuario,$contrasena) {
    if ($resultados !=NULL) {
      $Nombreusuario=$resultados['Nombreusuario'];
      $correo= $resultados['correo'];
      $contrasenaUsuario=$resultados['contrasena'];
	  $tipoUsuario=$resultados['tipoUsuario'];
      $nivel=$resultados['nivel'];
      
      if ($usuario == $Nombreusuario && $contrasena ==$contrasenaUsuario) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['correo'] = $correo;
        $_SESSION['contrasenaUsuario'] = $contrasenaUsuario;
        $_SESSION['tipoUsuario'] = $tipoUsuario;
        $_SESSION['nivel'] = $nivel;
        header('Location: php/sesion.php');
      }else{
        echo'<br>
        <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Contraseña Incorrecta
        </div>
        <br>';

      }
      
    }else
    {
      echo'<br>
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Usuario y contraseña Incorrectos
      </div>
      <br>';
    }

  }

	
	if(!empty($_POST))
	{
    $link = mysqli_connect("localhost", "root", "root");
    $usuario = mysqli_real_escape_string($link,$_POST['usuario']);
    $usuario = strip_tags($_POST['usuario']);
    $usuario = trim($_POST['usuario']);

    $contrasena = mysqli_real_escape_string($link,md5($_POST['contrasena']));
    $contrasena = strip_tags(md5($_POST['contrasena']));
    $contrasena = trim(md5($_POST['contrasena']));
	
		$link = mysqli_connect("localhost", "root", "root");
		mysqli_select_db($link, "pronosticodeportivo");

		$tildes = $link->query("SET NAMES 'utf8'"); //Para que	 se muestren las tildes correctamente

		$result = mysqli_query($link, "SELECT * FROM usuario WHERE Nombreusuario = '$usuario'");
    
		$datos= mysqli_fetch_array($result);
		
		validar($datos,$usuario,$contrasena);
		mysqli_free_result($result);

		mysqli_close($link);

	}
	
?>
<!DOCTYPE html>
<html>
    
<head>
	<title>Inicio De Sesion</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://www.smartmoneysystemnow.com/img/infalible.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="usuario" name="usuario" class="form-control input_user textoNegro"  placeholder="Usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="contrasena" name="contrasena" class="form-control input_pass" placeholder="Contrase&ntilde;a">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Recordarme</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Ingresar</button>
				   </div>
				</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						No Tienes Una Cuenta? <a href="#" class="ml-2">Registrate</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Olvidaste Tu Contrase&ntilde;a?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
