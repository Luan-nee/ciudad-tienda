<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Explorar</title>
    <link rel="stylesheet" href="<?php echo $list_css['explorar'];?>">
    <script defer src="js/mostrar-description.js"></script>
</head>
<body>
    <?php include("../reutilizable/header.php"); ?>
    <section class="header_title">
        <h2>EXPLORAR</h2>
    </section>
    <section class="apartado-buscador">
        <form class="conteiner-search">
            <input type="search" id="buscador" placeholder="Buscar producto..">
            <img src="../../img/icono/lupa.png" alt="">
        </form>
    </section>
    <section id="conteinerProducto" class="conteiner-AllProduct">
        <?php for ($i=0; $i < 14; $i++) { ?>
            <label style="position:relative;" value="<?php echo $i+1; ?>">
                <article class="producto">
                    <h3>nombre del producto</h3>
                    <!-- restricción al tamaño vertical de la imagen -->
                    <!-- <img src="../../img/img-raro.jpg" alt=""> -->
                    <img src="../../img/img-gato2.jpg" alt="">
                </article>
                <a class="direction-perfil-vendedor" href="../cuenta-usuario/perfil.php?correo=1">
                    <div class="img-vendedor">
                        <img src="../../img/img_user.png" alt="">
                    </div>
                </a>
                <div class="window-informacion-producto" value="<?php echo $i+1; ?>"></div>
                <!-- descripción del producto -->
                <div class="description-producto">
                    <label>
                        <h4>Descripción:</h4>
                        <p>
                            lore Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit, corrupti. Lorem ipsum dolor  magni id. Atque nemo libero odio.
                        </p>
                    </label>
                    <footer>
                        <p>
                            Precio: 
                            <b>S/300</b>
                        </p>
                        <p class="description_cantidad">
                            Cantidad: 
                            <b>10 unidades</b>
                        </p>
                        <a value="botonObtener">obtener</a>
                    </footer>
                </div>
            </label>
        <?php } ?>
    </section>
</body>
</html>