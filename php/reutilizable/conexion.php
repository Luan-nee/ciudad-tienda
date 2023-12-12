<?php 
class bdd{
    public $conexion;

    function __construct($Pserver, $Pbdd, $Puser, $Ppassword){
        try{
            $this->conexion = new PDO("mysql:host=$Pserver; dbname=$Pbdd",$Puser,$Ppassword);
            $this->conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion establecida";
        }catch(Exception $error){
            echo $error;
        }
    }

    public function usuarios($tabla){
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }

    public function guardar_user($nombre, $celular, $email, $password){
        $sql = "INSERT INTO `usuarios` (`id`, `nombre`, `celular`, `email`, `contraseña`) 
        VALUES (NULL, '$nombre', '$celular', '$email', '$password')";
    }
    public function iniciar_sesion($correo, ){

    }
}

$usuario = new bdd("localhost","ciudad","root", "");
print_r($usuario->usuarios("usuarios"));
?>