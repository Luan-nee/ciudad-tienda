<?php 
    if($_GET){
        $verwhat = isset($_GET["verwhat"])?$_GET["verwhat"]:"producto";
    }
?>
<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Registro Producto</title>
    <link rel="stylesheet" href="<?php echo $list_css['perfil'];?>">
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
                <a href="perfil.php?verwhat=producto">producto</a>
                <a href="perfil.php?verwhat=datos-user">sobre el vendedor</a>
            </nav>
        </section>

        <?php if( isset($verwhat) && $verwhat == "producto"){ ?>
            <section class="conteiner-producto">
            <!-- inicio de la estructura de los productos -->
                <?php for ($i=0; $i < 1; $i++) { ?>
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
        <?php }else if(isset($verwhat) && $verwhat == "datos-user" ){ ?>
            <!-- apartado sobre el vendedor -->
            <section class="sobre-el-vendedor">
                <label for="">
                    <h3>Nombre:</h3>
                    <p>luan del sol huillca sánchez</p>
                </label>
                <label for="">
                    <h3>Correo Eléctronico:</h3>
                    <p>luandelsol54@gmail.com</p>
                </label>
                <label for="">
                    <h3>Numero de celular:</h3>
                    <p>900210102</p>
                </label>
            </section>
        <?php }else{

        } ?>
    </section>
</body>
</html>