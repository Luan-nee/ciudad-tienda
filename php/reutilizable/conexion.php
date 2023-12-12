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
        $sql = "INSERT INTO `usuarios` (`id`, `nombre`, `celular`, `email`, `password`) 
        VALUES (NULL, '$nombre', '$celular', '$email', '$password')";
        $resultado = $this->conexion -> exec($sql);
        if($resultado){
            echo "los datos fueron guardados";
        }else{
            echo "no se guardaron los datos";
        }
    }

    public function getUser($tabla ,$email){
        $sql = "SELECT * FROM $tabla WHERE email='$email' ";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }
    // public function iniciar_sesion($correo, ){

    // }
}

$usuario = new bdd("localhost","ciudad","root", "");
// print_r($usuario -> getUser("usuarios","luandelsol54@gmail.com"));
// $usuario -> guardar_user("luannnn", "999","emaillll", "123456789");
// print_r($usuario->usuarios("usuarios"));


?>