<?php
    //datos a obtener cuando ingrese a la pagina

    include("../reutilizable/configuraciones.php"); 
?>
    <title>
        <?php 
        if($_GET && $_GET['modo'] == "registro"){
            echo "Registro";
        }else{
            echo "Iniciar seción";
        }?>
    </title>
    <!-- enlaces de archivos css -->
    <link rel="stylesheet" href="<?php echo $list_css['login'];?>">
</head>
<body>
    <section class="conteiner-login-user">
        <form class="formulario_registroSecion" action="">
            <h1 class="title_form">
                <?php if($_GET && $_GET['modo'] == "registro"){
                    echo "Crear nueva cuenta";
                }else{
                    echo "Iniciar seción";
                }?>
            </h1>
            
            <?php if($_GET && $_GET['modo'] == "registro"){ ?>
                <input class="form_input color_inputText" type="text" placeholder="nombre_user">
                <input class="form_input color_inputText" type="email" placeholder="correo@eléctronico.com">
                <input class="form_input color_inputText" type="number" placeholder="numero de celular">
                <input class="form_input color_inputText" type="password" placeholder="nueva_contraseña">
                <input class="form_input color_inputText" type="password" placeholder="verificar_contraseña">
            <?php }else{ ?>
                <input class="form_input color_inputText" type="email" placeholder="correo@eléctronico.com">
                <input class="form_input color_inputText" type="password" placeholder="contraseña">
            <?php } ?>
            <input class="form_input btn_submit" type="submit" value="enviar">
            
            <?php if($_GET && $_GET['modo'] == "registro"){ ?>
                <a href="iniciar_secion.php?modo=iniciarSecion">login</a>
            <?php }else{ ?>
                <a href="iniciar_secion.php?modo=registro">registrarse</a>
            <?php }?>
        </form>
    </section>

    <!-- ventan emergente cuando las credenciales son incorrectas -->
    <section class="puppet_login">
        <h1 class="title_puppet">
            Error
        </h1>
        <p class="enunciado_puppet">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ullam deleniti quod quidem. Voluptate vero, eos tenetur enim veritatis vel earum, labore qui laudantium aspernatur eius eum incidunt ipsam tempore?
        </p>
    </section>
</body>
</html>