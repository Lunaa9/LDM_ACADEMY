<?php
include 'conectar.php';
session_start();
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$password = $_POST["contrasena"];
$telefono = $_POST["telefono"];
if (isset($_POST['registrar'])) {
    $hash = password_hash($password, PASSWORD_DEFAULT, [50]);


    $insertar = ("INSERT INTO usuarios (nombre, apellido, correo, contrasena, telefono, id_rol) VALUES ('$nombre','$apellido','$correo','$hash','$telefono','2')");

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '<script>
    alert ("El correo ya se registro");
    window.location.href ="login2.html";
 </script>';
        exit;
    }
    $resultado = mysqli_query($conexion, $insertar);
    if (!$resultado) {
        echo 'Error al registrarte';
    } else {
        echo '<script>
    alert ("Usuario registrado exitosamente");
    window.location.href ="login2.html";
 </script>';
    }
}
