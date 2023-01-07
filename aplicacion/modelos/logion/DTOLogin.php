<?php
include_once "../../configuracion/conexion.php";
class DTOLogin extends conexion{
    public $id;
    public $Nombreusuario;
    public $correo;
    public $contrasena;
    public $tipoUsuario;
    public $nivel;
    public $activo;
    public $url;


    public function IngresarXUsuario($usuario){
        $this->conectar();
        $eje = mysqli_prepare($this->con,"SELECT id,Nombreusuario,correo,contrasena,tipoUsuario,nivel,activo FROM usuario WHERE Nombreusuario = '$usuario'");
        $eje->execute();
        $res = $eje->get_result();
        return $res->fetch_object(DTOLogin::class);
    }

 
}

?>