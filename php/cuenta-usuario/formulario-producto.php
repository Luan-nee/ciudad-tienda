
<?php
if($_POST){
    $name_product = (isset($_POST['name_producto']))?$_POST['name_producto']:"";
    $descrip = (isset($_POST['description']))?$_POST['description']:"";
    $precio = (isset($_POST['precio']))?$_POST['precio']:"";
    $img = (isset($_FILES['img_product']))?$_FILES['img_product']:"";
    
}
?>
<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Registrar Producto</title>
    <link rel="stylesheet" href="<?php echo $list_css['registrarProducto'];?>">
</head>
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
                <input min="1" type="number" name="precio" id="" placeholder="S/ precio">
                <input type="submit" value="publicar producto">
            </section>
        </form>
    </section>
</body>
</html>