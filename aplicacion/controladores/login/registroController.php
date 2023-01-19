<?php
include_once('../../modelos/logion/DTOLogin.php');
session_start();
if (isset($_POST['NombreUsuario'])) {

    $link = mysqli_connect("localhost", "u693577563_Franco", "Franco2022");
    $NombreUsuario = mysqli_real_escape_string($link, $_POST['NombreUsuario']);
    $NombreUsuario = strip_tags($_POST['NombreUsuario']);
    $NombreUsuario = trim($_POST['NombreUsuario']);

    $EMAIL = mysqli_real_escape_string($link, $_POST['EMAIL']);
    $EMAIL = strip_tags($_POST['EMAIL']);
    $EMAIL = trim($_POST['EMAIL']);

    $pass = mysqli_real_escape_string($link, md5($_POST['pass']));
    $pass = strip_tags(md5($_POST['pass']));
    $pass = trim(md5($_POST['pass']));

    $registrar = new DTOLogin();
    $registrar=$registrar->CrearUsuario($NombreUsuario,$EMAIL,$pass);
   if ($registrar==null) {
    $registroExitoso = new DTOLogin();
    $_SESSION['UsuarioRegistra'] = $NombreUsuario;
    $registroExitoso->url = "seguridad.php";
    $jsonstring = json_encode($registroExitoso);
    echo $jsonstring;
   }else{
    $jsonstring = json_encode($registrar);
    echo $jsonstring;
   }
   
    
}
