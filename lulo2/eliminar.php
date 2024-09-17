<?php
include("conectar.php");

if(isset($_GET['id_usuario'])){
    $id = $_GET['id_usuario'];
    $q = "DELETE FROM usuarios where id_usuario = $id";
    $resultado = mysqli_query ($conexion,  $q);
    if (!$resultado){
        die ("Error");
    }
    header(header: "location: estudiante-list.php");
}

