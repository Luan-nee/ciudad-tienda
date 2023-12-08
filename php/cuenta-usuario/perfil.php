<!-- 
DATOS DEL ESTUDIANTE:
NOMBRE DEL CURSO: LENGUAJES ESTRUCTURADO
APELLIDOS Y NOMBRES: HUILLCA SÁNCHEZ, LUAN DEL SOL
NOMBRE DEL PROYECTO: CIUDAD
-->
<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Perfil-User</title>
    <link rel="stylesheet" href="<?php echo $list_css['perfil'];?>">
    <script defer src="js/cantidad-lineas.js"></script>
</head>
<body>
    <?php include("../reutilizable/header.php"); ?>
    <!-- <?php//include("../login/iniciar_secion.php"); ?> -->
    <section class="conteiner-All">
        <section class="sub-head">
            <label>
                <div class="conteiner-img">
                    <img src="../../img/img_user.png" alt="#">
                </div>
                <section class="datos_sub-head">
                    <!-- los estilos asignados no son de importancia -->
                    <h3 class="--numProduc">12345</h3>
                    <h3 class="--numSegui">54321</h3>
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
                <a href="#">Productos</a>
                <a href="#">Otros</a>
            </nav>
        </section>

        <section class="conteiner-producto">
            <!-- inicio de la estructura de los productos -->
            <?php for ($i=0; $i < 20; $i++) { ?>
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
    </section>
</body>
</html>