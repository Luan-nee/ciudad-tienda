<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Perfil-User</title>
    <link rel="stylesheet" href="<?php echo $list_css['explorar'];?>">
    <script defer src="js/mostrar-description.js"></script>
</head>
<body>
    <?php include("../reutilizable/header.php"); ?>
    <section class="apartado-buscador">
        <label class="conteiner-search" for="buscador">
            <input type="search" id="buscador">
            <img src="../../img/icono/lupa.png" alt="">
        </label>
    </section>
    <section id="conteinerProducto" class="conteiner-AllProduct">
        <?php for ($i=0; $i < 14; $i++) { ?>
            <label style="position:relative;">
                <div class="window-informacion-producto" value="<?php echo $i+1; ?>">
                </div>
                <article class="producto">
                    <h3>nombre del producto</h3>
                    <!-- restricción al tamaño vertical de la imagen -->
                    <!-- <img src="../../img/img-raro.jpg" alt=""> -->
                    <img src="../../img/img-gato2.jpg" alt="">
                    <a href="../cuenta-usuario/perfil.php?correo=1">
                        <div class="img-vendedor">
                            <img src="../../img/img_user.png" alt="">
                        </div>
                    </a>
                </article>
                <!-- descripción del producto -->
                <div class="description-producto">
                    <p>
                        lore Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit, corrupti. Lorem ipsum dolor  magni id. Atque nemo libero odio.
                    </p>
                    <footer>
                        <p>precio: S/300</p>
                        <p>cantidad: 10 unidades</p>
                        <a>obtener</a>
                    </footer>
                </div>
            </label>
        <?php } ?>
    </section>
</body>
</html>