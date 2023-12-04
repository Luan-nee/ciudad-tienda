<?php
    //datos a obtener cuando ingrese a la pagina
    
    // $_GET['formulario'] debe almacenar (secion|registro)
    $mod_login = (isset($_GET['formulario']) && $_GET['formulario'])?$_GET['formulario']:"sin dato"; 
    $mod_login = "secion"; //momentaneo

    function verifyCredenciales($Credencials){
        // verificando credenciales (completar)
        if($Credencials){
            return true;
        }else{
            return false;
        }
    }

    // recibiendo datos por el metodo post
    $conexion_user = verifyCredenciales(true);

    include("../reutilizable/configuraciones.php"); 
?>
    <title>
        <?php echo ($mod_login!="sin dato")?$mod_login:"Error"; ?>
    </title>
    <!-- enlaces de archivos css -->
    <link rel="stylesheet" href="<?php echo $list_css['login'];?>">
</head>
<body>
    <section>
        <form class="formulario_registroSecion" action="">
            <h1 class="title_form">
                <?php if($mod_login == "secion"){
                    echo "Iniciar Sesión";
                }else if($mod_login == "registro"){
                    echo "Registro";
                }else{
                    echo "ERROR_noModo";
                }?>
            </h1>
            
            <?php if($mod_login == "secion"){ ?>
                <input class="form_input color_inputText" type="email" placeholder="correo@eléctronico.com">
                <input class="form_input color_inputText" type="password" placeholder="contraseña">
            <?php }else if($mod_login == "registro"){ ?>
                <input class="form_input color_inputText" type="text" placeholder="nombre_user">
                <input class="form_input color_inputText" type="email" placeholder="correo@eléctronico.com">
                <input class="form_input color_inputText" type="password" placeholder="nueva_contraseña">
                <input class="form_input color_inputText" type="password" placeholder="verificar_contraseña">
            <?php }else{ ?>
                <p>se produjo un error</p>
            <?php } ?>
            <input class="form_input btn_submit" type="submit" value="enviar">
        </form>
    </section>

    <!-- ventan emergente cuando las credenciales son incorrectas -->
    <?php if($conexion_user){ ?>
        <section class="puppet_login">
            <h1 class="title_puppet">
                Error
            </h1>
            <p class="enunciado_puppet">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ullam deleniti quod quidem. Voluptate vero, eos tenetur enim veritatis vel earum, labore qui laudantium aspernatur eius eum incidunt ipsam tempore?
            </p>
        </section>
    <?php } ?>
</body>
</html>