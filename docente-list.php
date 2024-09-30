<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="./css/notificacion.css">

	<link rel="stylesheet" href="./css/styles.css">
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
	
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<a href="perfil.html"><img src="./assets/avatar/Avatar2.png" class="img-fluid" alt="Avatar"></a>
					
					<figcaption class="roboto-medium text-center">
						orientador <br><small class="roboto-condensed-light">Administrador</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; PÁGINA</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Estudiantes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="estudiante-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Estudiante</a>
								</li>
								<li>
									<a href="estudiante-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Estudiantes</a>
								</li>
								<li>
									<a href="estudiante-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Estudiantes</a>
								</li>								
								<li>
									<a  href="estudiante-informe.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; INFORME DEL ESTUDIANTE</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-tshirt fa-fw"></i> &nbsp; docentes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="docente-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar docente</a>
								</li>
								<li>
									<a href="docente-list.php "><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de docentes</a>
								</li>
								<li>
									<a href="docente-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar docente</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Campañas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="campaña-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Campaña</a>
								</li>
								<li>
									<a href="campaña-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Campañas</a>
								</li>
								<li>
									<a href="campaña-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Campaña</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="certificados.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; certificados</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"> </i>
				</a>


				<a class="profile-link" onclick="toggleNotifi()">
					<i class="fa-solid fa-bell"></i>
					<div class="notifi-box" id="box">	
						<h2>Notifications <span>3</span></h2>
						
						<div class="notifi-item">
							<a href="notificacion.html"><img src="./assets/avatar/avatar1.png" alt="img"></a>
							<div class="text">
							   <h4>Elias Abdurrahman</h4>
							   <p>@lorem ipsum dolor sit amet</p>
							</div> 
						</div>
			
						<div class="notifi-item">
							<a href="notificacion.html"><img src="./assets/avatar/avatar3.png" alt="img"></a>
							<div class="text">
							   <h4>John Doe</h4>
							   <p>@lorem ipsum dolor sit amet</p>
							</div> 
						</div>
			
						<div class="notifi-item">
							<a href="notificacion.html"><img src="./assets/avatar/avatar4.png" alt="img"></a>
							<div class="text">
							   <h4>Emad Ali</h4>
							   <p>@lorem ipsum dolor sit amet</p>
							</div> 
						</div>
			
						
					</div></a>
				
				



				<a href="perfil.html" class="profile-link">
					<i class="fas fa-user-cog"></i></a>
					
					<a href="login2.html">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>
			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE DOCENTES
				</h3>
				<p class="text-justify">
					
				</p>
			</div>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="docente-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR DOCENTE</a>
					</li>
					<li>
						<a class="active" href="docente-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE DOCENTES</a>
					</li>
					
				</ul>
			</div>

			<!-- Content -->
			<div class="container-fluid">
				<form class="form-neon" action="">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="inputSearch" class="bmd-label-floating">¿Qué docente estas buscando?</label>
									<input type="text" class="form-control" name="busqueda-" id="inputSearch" maxlength="30">
								</div>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 40px;">
									<button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>


			<div class="container-fluid">
				<form action="">
					<input type="hidden" name="eliminar-busqueda" value="eliminar">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<p class="text-center" style="font-size: 20px;">
									Resultados de la busqueda <strong>“Buscar”</strong>
								</p>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 20px;">
									<button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>


			<!--CONTENT-->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<thead>
								<tr class="text-center roboto-medium">
								<tr id="papito">
									<th id="papito2"></th>
									<th id="papito2">Nombre</th>
									<th id="papito2">Apellido</th>
									<th id="papito2">Correo</th>
									<th id="papito2">Telefono</th>
									<th id="papito2">Actualizar</th>
									<th id="papito2">Eliminar</th>
								</tr>

								</tr>
								<?php
								include('conectar.php');

								if (isset($_POST['btnbuscar'])) {
									$buscar = $_POST['txrbuscar'];
								} else {
									$queryusuarios = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY telefono ASC");
								}
								$queryusuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_rol='3'");
								$numerofila = 0;
								while ($mostrar = mysqli_fetch_array($queryusuarios)) {
									$numerofila++;
									echo "<tr>";
									echo "<td>" . $numerofila . "</td>";
									echo "<td>" . $mostrar['nombre'];
									echo "<td>" . $mostrar['apellido'];
									echo "<td>" . $mostrar['correo'];
									echo "<td>" . $mostrar['telefono'];
									echo "<td><a href=\"editar22.php?id_usuario=$mostrar[id_usuario]\"> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
									echo " <td><a href=\"eliminardoc.php?id_usuario=$mostrar[id_usuario]\"> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
									echo "</tr>";
								}
								?>
							</thead>
						<tbody>




						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Atras</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Siguiente</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>




	</main>


	<!--=============================================
=            Include JavaScript files           =
==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js"></script>

	<!-- popper -->
	<script src="./js/popper.min.js"></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js"></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js"></script>
	<script>
		$(document).ready(function() {
			$('body').bootstrapMaterialDesign();
		});
	</script>

	<script src="./js/main.js"></script>
</body>

</html>