<?php
    include("../reutilizable/configuraciones.php"); 
    
    //datos a obtener cuando ingrese a la pagina
    if($_POST){
        if($_POST['btn_submit'] == "Registrarse"){
            $name_user = isset($_POST['regis_nameUser'])?$_POST['regis_nameUser']:"";
            $email = isset($_POST['regis_email'])?$_POST['regis_email']:"";
            $celular = isset($_POST['regis_celular'])?$_POST['regis_celular']:"";
            $password = isset($_POST['regis_password'])?$_POST['regis_password']:"";
            
            // comprobar que los datos cumples con los requisitos
            // codigo...
            $table = "user";
            $_SESSION['email-user'] = $email; //identificador único provicional
            $SQL_BDD -> save_user($table, $name_user, $celular, $email, $password, $seguidores = 0);
            header("location: ../explorar/explorar.php");

        }else if($_POST['btn_submit'] == "Iniciar Sesion"){
            // verificar si las credenciales son correctas
            $listUsuarios = $usuario -> getUser("usuarios", $_POST['regis_email']);
            if($listUsuarios){
                foreach($listUsuarios as $list){
                    if($list['email'] == $_POST['regis_email'] && $list['password'] == $_POST['regis_password']){
                        echo "datos correctos";
                        $_SESSION['email-user'] = $email; //identificador único provicional
                        header("location: ../explorar/explorar.php");
                    }
                }
            }
        }else{
            echo "ocurrió un error al recibir los dato";
        }
    }

    if( isset($_GET['cerraSecion']) && $_GET['cerraSecion'] == true){
        session_destroy();
        echo "array global destruido";
    }
?>
    <title>
        <?php 
        if($_GET && $_GET['modo'] == "Registro"){
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
        <form class="formulario_registroSecion" action="iniciar_secion.php" method="post">
            <h1 class="title_form">
                <?php if($_GET && $_GET['modo'] == "registro"){
                    echo "Crear nueva cuenta";
                }else{
                    echo "Iniciar seción";
                }?>
            </h1>
            
            <?php if($_GET && $_GET['modo'] == "registro"){ ?>
                <input name="regis_nameUser" class="form_input color_inputText" type="text" minlength="2" maxlength="50" placeholder="nombre_user" required>
                <input name="regis_email" class="form_input color_inputText" type="email" minlength="2" maxlength="50" placeholder="correo@eléctronico.com" required>
                <input name="regis_celular" class="form_input color_inputText" type="number" min="90000000" max="999999999" placeholder="numero de celular" required>
                <input name="regis_password" class="form_input color_inputText" type="password" minlength="8" maxlength="20" placeholder="nueva_contraseña" required>
                <input name="regis_passwordValid" class="form_input color_inputText" type="password" minlength="8" maxlength="20" placeholder="verificar_contraseña" required>
                <input class="form_input btn_submit" type="submit" value="Registrarse" name="btn_submit">
            <?php }else{ ?>
                <input name="regis_email" class="form_input color_inputText" type="email" minlength="2" maxlength="50" placeholder="correo@eléctronico.com" required>
                <input name="regis_password" class="form_input color_inputText" type="password" minlength="8" maxlength="20" placeholder="nueva_contraseña" required>
                <input class="form_input btn_submit" type="submit" value="Iniciar Sesion" name="btn_submit">
            <?php } ?>
            
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