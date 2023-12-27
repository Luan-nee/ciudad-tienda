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

    public function save_user($nombre, $celular, $email, $password, $seguidores = 0){
        if(strpos($email, "@") && strpos($email, ".")){
            $sql = "INSERT INTO `user` (`nombre`, `email`, `celular`, `password`, `seguidores`) 
            VALUES ('$nombre', '$email', '$celular', '$password', '$seguidores')";
            $this->conexion -> exec($sql);
        }else{
            echo "este correo no es valido: ".$email;
        }
    }

    public function getUserEmail($email){
        $sql = "SELECT * FROM `user` WHERE email = '$email' ";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }
    public function getUserId( $id){
        $sql = "SELECT * FROM user WHERE id = '$id' ";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }


    ###### TODO REFERENTE A LA TABLA PRODUCTO
    public function save_producto($id_user, $nombre, $description, $foto, $unidad_medida, $cantidad_unidad_medida, $unidad_precio, $precio_por_mayor, $stock){
        $sql = " INSERT INTO producto (id_user, nombre, description, foto, unidad_medida, cantidad_unidad_medida, unidad_precio, precio_por_mayor, stock)
        VALUE ('$id_user', '$nombre', '$description', '$foto', '$unidad_medida', $cantidad_unidad_medida, $unidad_precio, $precio_por_mayor, $stock)";
        $this->conexion -> exec($sql);
    }
    public function numProductUser($id){
        $sql = "SELECT count(id) AS 'cantidad' FROM producto where id_user=$id group by id_user;";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }
    public function getProductUser($id_user){
        $sql = "SELECT * FROM producto WHERE id_user = '$id_user'";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia->fetchAll();
    }

    ####### BUSQUEDA DE PRODUCTOS SEGÚN COMO COMIENZA
    public function buscar($text){
        $searchText = $text.'%';
        $sql = "SELECT * FROM producto WHERE nombre LIKE '$searchText' ";
        $sentencia = $this->conexion -> prepare($sql);
        $sentencia -> execute();
        return $sentencia -> fetchAll();
    }
}

$SQL_BDD = new bdd;
// $SQL_BDD -> buscar($text);
// $SQL_BDD -> numProductUser($id);
// $SQL_BDD -> save_producto($nombre, $precio, $descripcion, $foto);
// $SQL_BDD -> getUser($tabla , $email);
// print_r($usuario -> getUser("usuarios","luandelsol54@gmail.com"));
// $usuario -> guardar_user("luannnn", "999","emaillll", "123456789");
// print_r($usuario->usuarios("usuarios"));


?>