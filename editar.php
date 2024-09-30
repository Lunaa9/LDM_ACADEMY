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
    <link rel="stylesheet" href="editar.css">

    <link rel="stylesheet" href="">
    <title></title>
</head>

<body>
    <div class="container" id="container">

                <div class="social-icons" type="container">
                   <span><h1>Ingresa tu información</h1></span>
                    <input type="int" class="centered-input"name="id_usuario" placeholder="id" $value="<?php echo $fila['id_usuario'] ?>" readonly required>
                    <input type="text" class="centered-input"name="nombre" placeholder="Nombre" $value="<?php echo $fila['nombre'] ?>" required>
                    <input type="text" class="centered-input"name="apellido" placeholder="Apellido" $value="<?php echo $fila['apellido'] ?>" required>
                    <input type="text" class="centered-input" name="correo" placeholder="Correo" $value="<?php echo $fila['correo'] ?>" required>
                    <input type="int" class="centered-input"name="telefono" placeholder="Telefono" $value="<?php echo $fila['telefono'] ?>" required>
                    <select name="curso" id="">
                        <option class="hover" value="901">901</option>
                        <option class="hover"value="902">902</option>
                        <option class="hover"value="1001">1001</option>
                        <option class="hover"value="1002">1002</option>
                        <option class="hover"value="1101">1101</option>
                        <option class="hover"value="1102">1102</option>
                    </select>
                       <button type="submit" name="modificar" class="hidden" id="modificar">Modificar</button>
                   
            </form>
        </div>
    </div>
    </div>
</body>

</html>