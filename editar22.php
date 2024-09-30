<?php

include 'conectar.php';
$id_usuario = $_GET['id_usuario'];
$sentencia = "SELECT * FROM usuarios WHERE id_usuario='" . $id_usuario . "' ";
$resultado = $conexion->query($sentencia) or die("Error al consultar producto" . mysqli_error($conexion));
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="">
    <title></title>
</head>

<body>
    <div class="container" id="container">

        <div class="form-container sign-up">
            <h1></h1>
            <form action="editar23.php" method="post">
                <div class="social-icons">

                <span>Ingresa tu información</span>
                    <input type="int" name="id_usuario" placeholder="id" value="<?php echo $fila['id_usuario'] ?>" readonly required>
                    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre'] ?>" required>
                    <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $fila['apellido'] ?>" required>
                    <input type="text" name="correo" placeholder="Correo" value="<?php echo $fila['correo'] ?>" required>
                    <input type="int" name="telefono" placeholder="Telefono" value="<?php echo $fila['telefono'] ?>" required>
                   
                    <button type="submit" name="modificar" class="hidden" id="modificar">Modificar</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>