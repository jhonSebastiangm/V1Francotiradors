<?php
include_once('../../modelos/logion/DTOLogin.php');
session_start();
if (isset($_POST['usuario'])) {
  $link = mysqli_connect("localhost", "u693577563_Franco", "Franco2022");
  $usuario = mysqli_real_escape_string($link, $_POST['usuario']);
  $usuario = strip_tags($_POST['usuario']);
  $usuario = trim($_POST['usuario']);
  $contrasena = mysqli_real_escape_string($link, md5($_POST['contra']));
  $contrasena = strip_tags(md5($_POST['contra']));
  $contrasena = trim(md5($_POST['contra']));

  $ingresar = new DTOLogin();
  $ingresar=$ingresar->IngresarXUsuario($usuario);
  if ($ingresar->Nombreusuario == $usuario && $ingresar->contrasena == $contrasena) {
     if ($ingresar->activo == 1) {
       $_SESSION['id'] = $ingresar->id;
       $_SESSION['NombreUsuario'] = $ingresar->Nombreusuario;
       $_SESSION['correo'] = $ingresar->correo;
       $_SESSION['contrasena'] = $ingresar->contrasena;
       $_SESSION['tipoUsuario'] = $ingresar->tipoUsuario;
       $_SESSION['nivel'] = $ingresar->nivel;
       $ingresar->url = "sesion.php";
     }

     if ($ingresar->activo == 0) {
       $_SESSION['correo'] = $ingresar->correo;
       $ingresar->url = "seguridad.php";
     }

     $jsonstring = json_encode($ingresar);
     echo $jsonstring;
   } else {
     $ingresar->contrasena="no";
     $jsonstring = json_encode($ingresar);
     echo $jsonstring;
   }
}
