<?php
include 'conectar.php';
session_start();
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$password = $_POST["contraseña"];
$telefono = $_POST["telefono"];
if(isset($_POST['registrar'])){
$password = password_hash($password, PASSWORD_BCRYPT,[50 ]);
password_verify($password, $passwordHash);

$insertar = ("INSERT INTO usuarios (nombre, apellido, correo, contraseña, telefono, id_rol) VALUES ('$nombre','$apellido','$correo','$password_hash','$telefono','2')");

$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo'<script>
    alert ("El correo ya se registro");
    window.location.href ="login2.html";
 </script>';
    exit;
}
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo'Error al registrarte';
}else{
    echo'<script>
    alert ("Usuario registrado exitosamente");
    window.location.href ="login2.html";
 </script>';
}
}