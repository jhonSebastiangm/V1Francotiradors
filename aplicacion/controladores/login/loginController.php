<?php
include_once('../../modelos/logion/DTOLogin.php');
session_start();
if (isset($_POST['usuario'])) {
  $link = mysqli_connect("localhost", "root", "root");
  $usuario = mysqli_real_escape_string($link, $_POST['usuario']);
  $usuario = strip_tags($_POST['usuario']);
  $usuario = trim($_POST['usuario']);
  $contrasena = mysqli_real_escape_string($link, md5($_POST['contrasena']));
  $contrasena = strip_tags(md5($_POST['contrasena']));
  $contrasena = trim(md5($_POST['contrasena']));
  $ingresar = DTOLogin::IngresarXUsuarioYContra($usuario, $ingresar);
  if ($ingresar != null) {
    if ($ingresar->activo == 0) {
      $_SESSION['id'] = $ingresar->id;
      $_SESSION['NombreUsuario'] = $ingresar->NombreUsuario;
      $_SESSION['correo'] = $ingresar->correo;
      $_SESSION['contrasena'] = $ingresar->contrasena;
      $_SESSION['tipoUsuario'] = $ingresar->tipoUsuario;
      $_SESSION['nivel'] = $nivel;
      $ingresar->url = "sesion.php";
    }

    if ($ingresar->activo == 1) {
      $_SESSION['correo'] = $ingresar->correo;
      $ingresar->url = "seguridad.php";
    }

    $jsonstring = json_encode($ingresar);
    echo $jsonstring;
  } else {
    $jsonstring = json_encode($ingresar);
    echo $jsonstring;
  }
}
