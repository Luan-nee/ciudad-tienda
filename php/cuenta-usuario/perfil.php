<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Perfil-User</title>
    <link rel="stylesheet" href="<?php echo $list_css['perfil'];?>">
</head>
<body>
    <?php include("../reutilizable/header.php"); ?>
    <section class="conteiner-All">
        <section class="sub-head red">
            <div class="conteiner-img">
                <img src="../../img/img_user.png" alt="#">
            </div>
            <article class="datos_sub-head">
                <!-- los estilos asignados no son de importancia -->
                <h3 class="--numProduc">12345</h3>
                <h3 class="--numSegui">54321</h3>
                <p>Productos</p>
                <p>Seguidores</p>
            </article>
        </section>
        <section class="blue">
            <nav>
                <a href="#">Productos</a>
                <a href="#">Otros</a>
            </nav>
        </section>
        <section class="informacion-user black">
            <!-- inicio de la estructura de los productos -->
            <article>
                <!-- img momentanea -->
                <img src="" alt=""> 
                <h3>Este es un producto</h3>
                <p>esta es una paqueña descripción</p>
                <footer>
                    <h4>0000 likes</h4>
                    <h4>0000 ventas</h4>
                </footer>
            </article>
            <!-- fin de la estructura -->
        </section>
    </section>
</body>
</html>