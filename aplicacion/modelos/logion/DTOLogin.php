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


    public function CrearUsuario($Nombreusuario,$correo,$contrasena){
        $this->conectar();
        $eje = mysqli_prepare($this->con,"INSERT INTO usuario (Nombreusuario,correo,contrasena,tipoUsuario,nivel,activo,url) VALUES ('$Nombreusuario','$correo','$contrasena','0','1','0',' ')");
       // $eje->bind_param("ssssdsssss",$this->nombre,$this->identificacion,$this->cuentabancaria,$this->nombrebanco,$this->valor,$this->correo,$this->ncelular,$this->pais,$this->ciudad,$this->descripcion);
        $eje->execute();

    }

 
}

?>