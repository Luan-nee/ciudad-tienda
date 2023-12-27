<?php include("../reutilizable/configuraciones.php");?>
    <title>Perfil</title>
    <link rel="stylesheet" href="<?php echo $list_css['perfil'];?>">
    <script defer src="js/menu.js"></script>
</head>
<body>
    
    <?php include("../reutilizable/header.php");

    $datos_user = $SQL_BDD -> getUserId($_SESSION['id_user']);
    $datos_product = $SQL_BDD -> getProductUser($_SESSION['id_user']);
    $numero_product = $SQL_BDD -> numProductUser($_SESSION['id_user']);
    // echo "<hr>";
    // print_r($numero_product);
    // print_r($datos_user);
    // print_r($datos_product); // XD, menudo bug.
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
                        <?php echo (isset($numero_product[0]['cantidad']))?$numero_product[0]['cantidad']:"0"; ?>
                    </h3>
                    <h3 class="--numSegui">
                        <?php echo (isset($numero_product[0]['seguidores']))?$numero_product[0]['seguidores']:"0"; ?>
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
                <a style="background-color:#151f28;" id="link_producto">producto</a>
                <a id="link_datoUser">sobre el vendedor</a>
            </nav>
        </section>

            <section id="section_producto" class="conteiner-producto">
            <!-- inicio de la estructura de los productos -->
                <?php foreach($datos_product as $product){ ?>
                    <article class="producto">
                        <!-- img momentanea -->
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($product['foto']);?>" alt=""> 
                        <h3>
                            <?php echo $product['nombre']; ?>
                        </h3>
                        <p class="description-producto">
                            <?php echo $product['description']; ?>
                            <span class="puntSuspensivo">...</span>
                        </p>
                        <footer>
                            <p>
                                Cantidad:
                                <?php echo $product['cantidad_unidad_medida']." ".$product['unidad_medida'] ; ?>
                            </p>
                            <p>
                                Precio: 
                                <?php echo "S/ ".$product['unidad_precio']; ?>
                            </p>
                            <p>
                                Precio por mayor: 
                                <?php echo "S/ ".$product['precio_por_mayor']; ?>
                            </p>
                            <p>
                                Stock: 
                                <?php echo $product['stock']." u"; ?>
                            </p>
                            <p>
                                Fecha de publicación:
                                <?php echo $product['fecha_public']; ?>
                            </p>
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