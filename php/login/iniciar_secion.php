<?php
    include("../reutilizable/configuraciones.php"); 
    
    $error_login = false;

    if(isset($_GET['cerraSecion']) && $_GET['cerraSecion']){
        session_destroy();
    }

    if($_POST){
        if($_POST['btn_submit'] == "registro" && $_POST['regis_password'] == $_POST['regis_passwordValid']){

            $name_user = isset($_POST['regis_name'])?$_POST['regis_name']:"";
            $email = isset($_POST['regis_email'])?$_POST['regis_email']:"";
            $celular = isset($_POST['regis_celular'])?$_POST['regis_celular']:"";
            $password = isset($_POST['regis_password'])?$_POST['regis_password']:"";
            $seguidores = 0;

            $_SESSION['email-user'] = $email; //identificador único provicional
            $SQL_BDD -> save_user($name_user, $celular, $email, $password, $seguidores);
            $datosUser = $SQL_BDD -> getUserEmail($email);
            $_SESSION['id_user'] = $datosUser[0]['id']; //identificador único provicional
            header("location: ../explorar/explorar.php");

        }else if($_POST['btn_submit'] == "login"){
            // verificar si las credenciales son correctas
            $email = isset($_POST['sesion_email'])?$_POST['sesion_email']:"";
            $password = isset($_POST['sesion_password'])?$_POST['sesion_password']:"";
            $datosUser = $SQL_BDD -> getUserEmail($email);

            if($datosUser && $datosUser[0]['email'] == $email && $datosUser[0]['password'] == $password){
                $_SESSION['id_user'] = $datosUser[0]['id']; //identificador único provicional
                header("location: ../explorar/explorar.php");
            }else{
                $error_login = true;
                echo "<script> alert('Credenciales incorrectos'); </script>";
            }
        }
    }

?>
    <title>
        Login
    </title>
    <!-- enlaces de archivos css -->
    <link rel="stylesheet" href="<?php echo $list_css['login'];?>">
    <script defer src="js/registro.js"></script>
</head>
<body style="color:black;">
    <section class="conteiner-login-user">

        <form id="registro_part" style="display:none;" class="formulario_registroSecion" action="iniciar_secion.php" method="post">
            <h1 class="title_form">
                Iniciar Seción
            </h1>
            <input name="regis_name" class="form_input color_inputText" type="text" minlength="2" maxlength="50" placeholder="nombre_user" required>
            <input name="regis_email" class="form_input color_inputText" type="email" minlength="2" maxlength="50" placeholder="correo@eléctronico.com" required>
            <input name="regis_celular" class="form_input color_inputText" type="number" min="90000000" max="999999999" placeholder="numero de celular" required>
            <input name="regis_password" class="form_input color_inputText" type="password" minlength="8" maxlength="20" placeholder="nueva_contraseña" required>
            <input name="regis_passwordValid" class="form_input color_inputText" type="password" minlength="8" maxlength="20" placeholder="verificar_contraseña" required>
            <input class="form_input btn_submit" type="submit" value="registro" name="btn_submit">
            <button class="btn_login" type="button">login</button>
        </form>

        <form id="login_part" class="formulario_registroSecion" action="iniciar_secion.php" method="post">
            <h1 class="title_form">
                Iniciar Seción
            </h1>
            <input name="sesion_email" class="form_input color_inputText" type="email" minlength="2" maxlength="50" placeholder="correo@eléctronico.com" required>
            <input name="sesion_password" class="form_input color_inputText" type="password" minlength="8" maxlength="20" placeholder="contraseña" required>
            <input class="form_input btn_submit" type="submit" value="login" name="btn_submit">
            <?php if($error_login){ echo "credenciales incorrectas"; } ?>
            <button class="btn_registro" type="button">registrarse</button>
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