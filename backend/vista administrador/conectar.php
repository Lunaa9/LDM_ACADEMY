<?php
$conexion = mysqli_connect("localhost","root","","ldm_academy");
if (!$conexion) {
    echo 'No se conecto a la base de datos';
}
else {
    echo 'Si se conecto a la base de datos';
}