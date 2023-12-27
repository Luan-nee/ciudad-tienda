<?php include("../reutilizable/configuraciones.php"); ?>
    <title>Registrar Producto</title>
    <link rel="stylesheet" href="<?php echo $list_css['registrarProducto'];?>">
    <script defer src="js/imgInput.js"></script>
</head>
    <?php
    if($_POST){
        $nombre = (isset($_POST['name_producto']))?$_POST['name_producto']:"";
        $description = (isset($_POST['description']))?$_POST['description']:"";
        $unidad_medida = (isset($_POST['unidad-medida']))?$_POST['unidad-medida']:"";
        $cantidad_unidad_medida = (isset($_POST['cantidad_unidad_medida']))?$_POST['cantidad_unidad_medida']:"";
        $costo = (isset($_POST['costo']))?$_POST['costo']:"";
        $precio_por_mayor = (isset($_POST['precio_mayor']))?$_POST['precio_mayor']:"";
        $stock = (isset($_POST['stock']))?$_POST['stock']:"";
        $img = addslashes(file_get_contents($_FILES['img_product']['tmp_name']));
        
        if($_FILES['img_product']['size'] > 3*1024*1024){
            echo "<script> alert('EL ARCHIVO ES SUPERIOR A 3MB')</script>";
        }else{
            // $SQL_BDD -> save_producto($_SESSION['id_user'],$name_product, $precio, $descrip, $img);
            $SQL_BDD -> save_producto($_SESSION['id_user'], 
            $nombre, $description, $img, $unidad_medida, $cantidad_unidad_medida, $costo, $precio_por_mayor, $stock);
            //('$id_user', '$nombre', '$description', '$foto', '$unidad_medida', $cantidad_unidad_medida, $unidad_precio, $precio_por_mayor, $stock)
            echo "<script> alert('PRODUCTO ALMACENADO')</script>";
        }
    }
    ?>
<body>
	<?php include("../reutilizable/header.php"); ?>
	<section class="header_title">
		<h2>Registrar Producto</h2>
	</section>
	<section class="conteiner-form">
		<form class="formulario-producto" action="formulario-producto.php" method="post" enctype="multipart/form-data">
			<section class="foto-producto">
				<label style="position: relative;" class="label-img" for="img-producto">
					<img id="preVisual" src="../../img/icono/img-producto.png" alt="">
					<!-- <img src="../../img/fondo.jpg" alt=""> -->
					<input style="position: absolute;" type="file" accept="image/*" name="img_product" onchange="verElement()" id="img-producto">
				</label>
		</section>
		<section class="datos-producto">
				<input type="text" name="name_producto" placeholder="Nombre del producto">
				<textarea name="description" cols="30" rows="10" placeholder="Descripción del producto"></textarea>
				<div class="dato-precio">
						<select name="unidad-medida">
							<option value="kilogramos">Kilogramos</option>
							<option value="gramos">Gramos</option>
							<option value="litros">Litros</option>
							<option value="mililitros">Mililitros</option>
						</select>
						<input class="input_precio" type="number" min="1" max="999" name="cantidad_unidad_medida" placeholder="cant.">
				</div>
				<input type="number" name="costo" min="1" max="999" placeholder="S/ Costo por venta" >
				<input class="conteiner-precio_mayor" name="precio_mayor" type="number" min="1" max="999" name="stock" placeholder=" S/ Precio por mayor ">
				<input type="number" min="1" max="999" name="stock" placeholder="stock">
				<input type="reset" value="limpiar celdas">
				<input type="submit" value="publicar producto">
			</section>
		</form>
	</section>
</body>
</html>