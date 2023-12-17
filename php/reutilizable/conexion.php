<?php 
class bdd{
    private $conexion;
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $bdd = "ciudad";

    function __construct(){
        try{
            $this->conexion = new PDO("mysql:host=$this->server; dbname=$this->bdd",$this->user,$this->password);
            $this->conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $error){
            echo $error;
        }
    }

    public function getTable($tabla){
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }

    //falta testear
    public function save_user($table, $nombre, $celular, $email, $password, $seguidores = 0){
        if(strpos($email, "@") && strpos($email, ".")){
            $sql = "INSERT INTO `$table` (`nombre`, `email`, `celular`, `password`, `seguidores`) 
            VALUES ('$nombre', '$email', '$celular', '$password', '$seguidores')";
            $this->conexion -> exec($sql);
        }else{
            echo "este correo no es valido: ".$email;
        }
    }

    public function get_user($table, $id){
        $sql = "SELECT * FROM `$table` WHERE id = `$id`";
        $sentencia = $this->conexion -> prepare();
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }
    public function getUser($tabla , $email){
        $sql = "SELECT * FROM $tabla WHERE email='$email' ";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }
}

$SQL_BDD = new bdd;

// print_r($usuario -> getUser("usuarios","luandelsol54@gmail.com"));
// $usuario -> guardar_user("luannnn", "999","emaillll", "123456789");
// print_r($usuario->usuarios("usuarios"));


?>