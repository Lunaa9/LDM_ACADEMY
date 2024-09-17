<?php
$conexion = mysqli_connect(hostname: "localhost",username: "root",password: "",database: "ldm_academy");
if (!$conexion) {
    echo 'No se conecto a la base de datos';
}
else {
    echo 'Si se conecto a la base de datos';
}