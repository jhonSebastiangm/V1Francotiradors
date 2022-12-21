<?php
include_once "../../configuracion/conexion.php";
class DTOLogin extends conexion{
    public $id;
    public $NombreUsuario;
    public $correo;
    public $contrasena;
    public $tipoUsuario;
    public $nivel;


    public static function IngresarXUsuarioYContra($identificacion,$contra){
        $conexion = new conexion();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM registro WHERE codasociado= ? AND contra= ?");
        $eje->bind_param("ss",$identificacion,$contra);
        $eje->execute();
        $res = $eje->get_result();
        return $res->fetch_object(DTOLogin::class);

    }

 
}

?>