<?php
//conexion
include('conectar.php');
//
session_start();
if (isset($_POST['login'])) {
    if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
        $correo = $_POST['correo'];
        $pass = $_POST['contrasena'];
        $query = $conexion->query(query: "SELECT * FROM usuarios WHERE correo='$correo'");
        $resultado = $query;
        if ($resultado->num_rows == 1) {
            $usuario = mysqli_fetch_assoc(result: $resultado);
        }
        
        if (password_verify(password: $pass, hash: $usuario['contrasena'])) {
            switch ($usuario['id_rol']) {
                case 1:
                    //administrador
                    header(header: "location: docente-new.html");
                    break;
                case 2:
                    //empleado
                    header(header: "location: estudiante-new.html");
                    break;
            }
        } else {
            echo '<script>
    alert ("Contraseña incorrecta");
    window.location.href ="login2.html";

 </script>';
        }
    } else {
        echo '<script>
    alert ("Llena los campos");
    window.location.href ="login2.html";

 </script>';
    }
}
