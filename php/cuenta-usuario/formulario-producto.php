<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Registrar Producto</title>
    <link rel="stylesheet" href="<?php echo $list_css['registrarProducto'];?>">
</head>
    <?php
    $_SESSION['id_user'] = 1; // asignación momentanea
    if($_POST){
        $nombre = (isset($_POST['name_producto']))?$_POST['name_producto']:"";
        $description = (isset($_POST['description']))?$_POST['description']:"";
        $precio = (isset($_POST['precio']))?$_POST['precio']:"";
        $img = addslashes(file_get_contents($_FILES['img_product']['tmp_name']));
        
        if($_FILES['img_product']['size'] > 3*1024*1024){
            echo "<script> alert('EL ARCHIVO ES SUPERIOR A 3MB')</script>";
        }else{
            $SQL_BDD -> save_producto($_SESSION['id_user'],$name_product, $precio, $descrip, $img);
            $SQL_BDD -> save_producto($_SESSION['id_user'], $nombre, $description, $foto, $unidad_medida, $unidad_precio, $precio_por_mayor, $stock);
            echo "<script> alert('PRODUCTO ALMACENADO')</script>";
        }
    }
    ?>
<body>
    <?php include("../reutilizable/header.php"); ?>
    <section class="header_title">
        <h2>Registrar Producto</h2>
    </section>
    <section class="conteiner-form">
        <form class="formulario-producto" action="formulario-producto.php" method="post" enctype="multipart/form-data">
            <section class="foto-producto">
                <label style="position: relative;" class="label-img" for="img-producto">
                    <img src="../../img/icono/img-producto.png" alt="">
                    <input style="position: absolute;" type="file" name="img_product" id="img-producto">
                </label>
            </section>
            <section class="datos-producto">
                <input type="text" name="name_producto" id="" placeholder="nombre del producto">
                <textarea name="description" id="" cols="30" rows="10" placeholder="descripción del producto"></textarea>
                <div class="dato-precio">
                    <select name="" id="">
                        <option value="">Kilogramos</option>
                        <option value="">Gramos</option>
                        <option value="">Litros</option>
                        <option value="">Mililitros</option>
                    </select>
                    <input class="input_precio" type="number" min="1" max="999" name="" placeholder="S/ ">
                </div>
                <input class="conteiner-precio_mayor" type="text" placeholder=" S/ Precio por mayor ">
                <input type="submit" value="publicar producto">
            </section>
        </form>
    </section>
</body>
</html>