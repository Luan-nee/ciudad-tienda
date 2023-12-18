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

###### TODO REFERENTE A LA TABLA USUARIO

    public function getTable($tabla){
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }

    public function save_user($table, $nombre, $celular, $email, $password, $seguidores = 0){
        if(strpos($email, "@") && strpos($email, ".")){
            $sql = "INSERT INTO `$table` (`nombre`, `email`, `celular`, `password`, `seguidores`) 
            VALUES ('$nombre', '$email', '$celular', '$password', '$seguidores')";
            $this->conexion -> exec($sql);
        }else{
            echo "este correo no es valido: ".$email;
        }
    }

    public function getUserEmail($tabla , $email){
        $sql = "SELECT * FROM $tabla WHERE email = '$email' ";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }
    public function getUserId($tabla , $id){
        $sql = "SELECT * FROM $tabla WHERE id = '$id' ";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }


    ###### TODO REFERENTE A LA TABLA PRODUCTO
    public function save_producto($id_user, $nombre, $precio, $descripcion, $foto){
        $sql = "INSERT INTO producto (id_user ,nombre, precio, descripcion, foto) VALUES ('$id_user','$nombre', '$precio', '$descripcion', '$foto')";
        $this->conexion -> exec($sql);
    }

    public function getProductUser($id_user){
        $sql = "SELECT * FROM producto WHERE id_user = '$id_user'";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia->fetchAll();
    }
}

$SQL_BDD = new bdd;
// $SQL_BDD -> save_producto($nombre, $precio, $descripcion, $foto);
// $SQL_BDD -> getUser($tabla , $email);
// print_r($usuario -> getUser("usuarios","luandelsol54@gmail.com"));
// $usuario -> guardar_user("luannnn", "999","emaillll", "123456789");
// print_r($usuario->usuarios("usuarios"));


?>