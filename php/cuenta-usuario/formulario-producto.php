<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Perfil-User</title>
    <link rel="stylesheet" href="<?php echo $list_css['registrarProducto'];?>">
</head>
<body>
    <?php include("../reutilizable/header.php"); ?>
    <section class="conteiner-form">
        <form class="formulario-producto" action="">
            <section class="foto-producto">
                <label style="position: relative;" class="label-img" for="img-producto">
                    <img src="../../img/icono/img-producto.png" alt="">
                    <input style="position: absolute;" type="file" name="" id="img-producto">
                </label>
            </section>
            <section class="datos-producto">
                <input type="text" name="" id="" placeholder="nombre del producto">
                <textarea name="" id="" cols="30" rows="10" placeholder="descripción del producto"></textarea>
                <input min="1" type="number" name="" id="" placeholder="S/ precio">
                <input type="submit" value="publicar producto">
            </section>
        </form>
    </section>
</body>
</html>