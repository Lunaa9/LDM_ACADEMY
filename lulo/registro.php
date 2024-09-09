<?php
include 'conectar12.php';
//Recibir los datos y almacenar en variables
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Email = $_POST["Email"];
$telefono = $_POST["telefono"];
$password = $_POST["password"];
$Usuario = $_POST["Usuario"];
//consulta para insertar
$insertar = "INSERT INTO crear_usuario(Nombres,Apellidos,Email, telefono, clave,Usuario) VALUES('$Nombres','$Apellidos','$Email','$telefono','$password','$Usuario')";

$verificar_Usuario = mysqli_query($conexion,"SELECT * FROM crear_usuario WHERE Usuario='$Usuario'");
if(mysqli_num_rows($verificar_Usuario) > 0){
    echo'<script>
    alert ("El Usuario ya se registro");
    window.history.go(-1)
 </script>';
    exit;
}
$verificar_Email = mysqli_query($conexion,"SELECT * FROM crear_usuario WHERE Email='$Email'");
if(mysqli_num_rows($verificar_Email) > 0){
echo '<script>
       alert ("El Email ya se registro");
       window.history.go(-1)
    </script>';
    exit;
}
//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo'Error al registrarte';
}else{
    header("location:../index.php");
}
//cerrar conexion
mysqli_close($conexion);
?>