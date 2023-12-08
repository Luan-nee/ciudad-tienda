<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Perfil-User</title>
    <link rel="stylesheet" href="<?php echo $list_css['explorar'];?>">
    <script defer src="js/cantidad-lineas.js"></script>
</head>
<body>
    <?php include("../reutilizable/header.php"); ?>
    <section class="apartado-buscador">
        <label class="conteiner-search" for="buscador">
            <input type="search" id="buscador">
            <img src="../../img/icono/lupa.png" alt="">
        </label>
    </section>
    <section class="conteiner-AllProduct">
        <?php for ($i=0; $i < 14; $i++) { ?>
            <article class="producto">
                <h3>nombre del producto</h3>
                <!-- restricción al tamaño vertical de la imagen -->
                <!-- <img src="../../img/img-raro.jpg" alt=""> -->
                <img src="../../img/img-gato2.jpg" alt="">
                <div class="img-vendedor">
                    <img src="../../img/img_user.png" alt="">
                </div>
            </article>
        <?php } ?>
        </section>
</body>
</html>