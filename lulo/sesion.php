<?php
require 'conectar12.php';
session_start();
$Usuario=$_POST["username"];
$password=$_POST['password'];

$q ="SELECT * from crear_usuario where Usuario = '$Usuario'and clave ='$password'";
$resultado = mysqli_query($conexion,$q);
$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location: ../CRUD_LUNA/alex.php");

}else
if($filas['id_cargo']==2){ //usuario
    header("location: ../index.php");
}

else {
    echo
    '<script>
       alert ("Usuario no registrado");
       window.history.go(-1)
    </script>';
    exit;
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>




