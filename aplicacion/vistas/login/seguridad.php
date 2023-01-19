<?php
session_start();
$UsuarioRegistra = $_SESSION['UsuarioRegistra'];
$link = mysqli_connect("localhost", "u693577563_Franco", "Franco2022");
mysqli_select_db($link, "u693577563_Deportivo");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$resultusuario = mysqli_query($link, "SELECT * FROM usuario  WHERE Nombreusuario = '$UsuarioRegistra'");
$datosusuario = mysqli_fetch_array($resultusuario);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../web/css/style.css">
</head>

<body>

<div class="col-md-12">
     <div class="col-md-7" style="float: left;">
     <div class="codigoQr"></div></div>
    <div class="col-md-3" >
          <h2 class="mt-3">Registro Exitoso Francotiradores</h2>
        <p class="mt-3" style="color: white;"><?php echo 'Bienvenid@ ' . utf8_decode($datosusuario['Nombreusuario']); ?> Finaliza tu registro realizando el pago a la cuenta de ahorros : 69343539819 BANCOLOMBIA</p>
        <p class="mt-3" style="color: white;">Y Por favor envia tu soporte de pago al whatsapp +57 3044487420</p>

          </a>
        </div>

			
	

    </div>
    <div>
        

    </div>

    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="../../../web/js/seguridad.js"></script>
  </body>

</html>