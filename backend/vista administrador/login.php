<?php
require 'conectar.php';
session_start();
$Correo=$_POST["correo"];
$password=$_POST['contraseña'];
if(isset($_POST['login'])){
$q ="SELECT * from usuarios where correo = '$Correo' and contraseña ='$password';";
$resultado = mysqli_query($conexion,$q);
$filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==1){ //administrador
    header("location: docente-new.html");

}else

if($filas['id_rol']==2){ //usuario
    header("location: estudiante-new.html");
}
}
else {
    header("location: login2.html ");
}

