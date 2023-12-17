<?php include("../reutilizable/configuraciones.php");?>
    <title>Perfil</title>
    <link rel="stylesheet" href="<?php echo $list_css['perfil'];?>">
    <script defer src="js/menu.js"></script>
</head>
<body>
    <?php include("../reutilizable/header.php");
    $datos_user = $SQL_BDD -> getUserId('user' , $_SESSION['id_user']);
    print_r($datos_user);
    ?>
    <section class="header_title">
        <h2>
            <?php 
            echo $datos_user[0]['nombre'];
            ?>
        </h2>
    </section>
    <section class="conteiner-All">
        <section class="sub-head">
            <label>
                <div class="conteiner-img">
                    <img src="../../img/img_user.png" alt="#">
                </div>
                <section class="datos_sub-head">
                    <!-- los estilos asignados no son de importancia -->
                    <h3 class="--numProduc">
                        <?php echo $datos_user[0]['seguidores']; ?>
                    </h3>
                    <h3 class="--numSegui">
                        <?php echo $datos_user[0]['seguidores']; ?>
                    </h3>
                    <p>Productos</p>
                    <p>Seguidores</p>
                </section>
            </label>
            <!-- agregar los botones que desea -->
            <div>
                <button class="btn-seguir">seguir</button>
            </div>
        </section>

        <section class="conteiner-nav">
            <nav>
                <a id="link_producto">producto</a>
                <a id="link_datoUser">sobre el vendedor</a>
            </nav>
        </section>

            <section id="section_producto" class="conteiner-producto">
            <!-- inicio de la estructura de los productos -->
                <?php for ($i=0; $i < 5; $i++) { ?>
                    <article class="producto">
                        <!-- img momentanea -->
                        <img src="../../img/img-gato.jpg" alt=""> 
                        <h3>Titulo del producto</h3>
                        <p class="description-producto">
                            <span class="puntSuspensivo">...</span>
                        </p>
                        <footer>
                            <h4>0000KM likes</h4>
                            <h4>0000KM ventas</h4>
                        </footer>
                    </article>
                <?php } ?>
            <!-- fin de la estructura -->
            </section>

            <!-- apartado sobre el vendedor -->
            <section style="display:none;" id="section_dataUser" class="sobre-el-vendedor">
                <label for="">
                    <h3>Nombre:</h3>
                    <p>
                        <?php echo $datos_user[0]['nombre']; ?>
                    </p>
                </label>
                <label for="">
                    <h3>Correo Eléctronico:</h3>
                    <p>
                        <?php echo $datos_user[0]['email']; ?>
                    </p>
                </label>
                <label for="">
                    <h3>Numero de celular:</h3>
                    <p>
                        <?php echo $datos_user[0]['celular']; ?>
                    </p>
                </label>
            </section>

    </section>
</body>
</html>