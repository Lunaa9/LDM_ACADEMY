<?php
require 'conectar.php';
if (isset($_POST['modificar'])) {
	$id_usuario = $_POST["id_usuario"] ?? 'Valor por defecto';
	$nombre = $_POST['nombre'] ?? 'Valor por defecto';
	$apellido = $_POST["apellido"] ?? 'Valor por defecto';
	$correo = $_POST["correo"] ?? 'Valor por defecto';
	$telefono = $_POST["telefono"] ?? 'Valor por defecto';
	$curso = $_POST["curso"] ?? 'Valor por defecto';

	$sentencia = "UPDATE usuarios set nombre = '$nombre', apellido = '$apellido', correo = '$correo', telefono = '$telefono', curso = '$curso' where id_usuario = '$id_usuario'";
	$resultado = mysqli_query($conexion, $sentencia);
	if (!$resultado) {
		echo 'Error al registrarte';
	} else {
		echo '<script>
    alert ("Usuario actualizado exitosamente");
    window.location.href ="estudiante-list.php";
 </script>';
	}
}
