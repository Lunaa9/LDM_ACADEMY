<?php
include 'conectar.php';
$correo =$_POST['correo']
if(isset($_POST['olvidar'])){

$insertar = ("INSERT INTO usuarios (correo) values ('$correo')");
$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    mail($correo, $asunto, $mensaje);  
}
}
else{
    header
}