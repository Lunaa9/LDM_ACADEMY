<?php

include 'conectar.php';
$id_usuario = $_GET['id_usuario'];
$sentencia = "SELECT * FROM usuarios WHERE id_usuario='" . $id_usuario . "' ";
$resultado = $conexion->query($sentencia) or die("Error al consultar producto" . mysqli_error($conexion));
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="">
    <title></title>
    	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

<!-- Bootstrap V4.3 -->
<link rel="stylesheet" href="./css/bootstrap.min.css">

<!-- Bootstrap Material Design V4.0 -->
<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

<!-- Font Awesome V5.9.0 -->
<link rel="stylesheet" href="./css/all.css">

<!-- Sweet Alerts V8.13.0 CSS file -->
<link rel="stylesheet" href="./css/sweetalert2.min.css">

<!-- Sweet Alert V8.13.0 JS file-->
<script src="./js/sweetalert2.min.js" ></script>

<!-- jQuery Custom Content Scroller V3.1.5 -->
<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">

<!-- General Styles -->
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="update-info-usuario.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>
            <!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; Editar
				</h3>
				<p class="text-justify">
					//..//
				</p>
			</div>
    <div class="container" id="container">

        <div class="form-container sign-up">
            <h1></h1>
            <form action="editar1.php" method="post">
                <div class="social-icons">
                <fieldset>
                <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>    
                    
                    <input type="int" name="id_usuario" placeholder="id" value="<?php echo $fila['id_usuario'] ?>" readonly required>
                    <div class="col-12 col-md-4">
                    <div class="form-group">
                    <label for="usuario_nombre" class="bmd-label-floating">Nombres</label>
                    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre'] ?>" required>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-12 col-md-4">
                    <label for="usuario_apellido" class="bmd-label-floating">Apellidos</label>
                    <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $fila['apellido'] ?>" required>
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label for="usuario_apellido" class="bmd-label-floating">correo</label>
                    <input type="text" name="correo" placeholder="Correo" value="<?php echo $fila['correo'] ?>" required>
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label for="usuario_apellido" class="bmd-label-floating">telefono</label>
                    <input type="int" name="telefono" placeholder="Telefono" value="<?php echo $fila['telefono'] ?>" required>
                    </div>
                    </div>
                    <select name="curso" id="">
                        <option value="901">901</option>
                        <option value="902">902</option>
                        <option value="1001">1001</option>
                        <option value="1002">1002</option>
                        <option value="1101">1101</option>
                        <option value="1102">1102</option>
                    </select>
                    <button type="submit" name="modificar" class="hidden" id="modificar">Modificar</button>
            </form>
        </div>
    </div>
    </div>
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>

</html>