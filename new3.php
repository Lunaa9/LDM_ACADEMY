<?php
require 'conectar.php';
session_start();
$nombre = $_POST['nombre'] ?? 'Valor por defecto';
$apellido = $_POST["apellido"] ?? 'Valor por defecto';
$correo = $_POST["correo"] ?? 'Valor por defecto';
$password = $_POST["contrasena"] ?? 'Valor por defecto';
$telefono = $_POST["telefono"] ?? 'Valor por defecto';

if (isset($_POST['registrar'])) {
    $hash = password_hash($password, PASSWORD_DEFAULT, options: [50]);


    $insertar = ("INSERT INTO usuarios (nombre, apellido, correo, contrasena, telefono,id_rol) VALUES ('$nombre','$apellido','$correo','$hash','$telefono','3')");

    $verificar_correo = mysqli_query(mysql: $conexion, query: "SELECT * FROM usuarios WHERE correo='$correo'");
    if (mysqli_num_rows(result: $verificar_correo) > 0) {
        echo '<script>
    alert ("El correo ya se registro");
    window.location.href ="docente-new.html";
 </script>';
        exit;
    }
    $resultado = mysqli_query(mysql: $conexion, query: $insertar);
    if (!$resultado) {
        echo 'Error al registrarte';
    } else {
        echo '<script>
    alert ("Usuario registrado exitosamente");
    window.location.href ="docente-new.html";
 </script>';
    }
}