<?php
include 'model/conexion.php';
$sentencia=$db->query("select * from alumnos;");
$alumnos=$sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($alumnos);
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema Academico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="tabla">
        <h1>Sistema Academico</h1>
        <table>
            <tr>
                <td>codigo</td>
                <td>nombre</td>
                <td>direccion</td>
                <td>telefono</td>
                <td>editar</td>
                <td>eliminar</td>
            </tr>
            <?php
                    foreach ($alumnos as $datos) {
                        ?>
            <tr>
                <td><?php echo $datos->idAlumno;?></td>
                <td><?php echo $datos->codigo;?></td>
                <td><?php echo $datos->nombre;?></td>
                <td><?php echo $datos->direccion;?></td>
                <td><?php echo $datos->telefono;?></td>
                <td><a href="editar.php?IdAlumno=<?php echo $datos->idAlumno;?>" >Editar</a></td>
                <td><a href="eliminar.php">Eliminar</a></td>
            </tr>
            <?php
        }
    ?>
        </table>
        <hr>
        <h3>Registrar alumnos</h3>
        <form method="POST" action="insertar.php">
            <table>
                <tr>
                    <td>codigo</td>
                    <td><input type="text" name="tcodigo"></td>
                </tr>
                <tr>
                    <td>nombre</td>
                    <td><input type="text" name="tnombre"></td>
                </tr>
                <tr>
                    <td>direccion</td>
                    <td><input type="text" name="tdireccion"></td>
                </tr>
                <tr>
                    <td>telefono</td>
                    <td><input type="text" name="ttelefono"></td>

                </tr>
                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset" name="" value="Restablecer"></td>
                    <td><input type="submit" name="" value="Guardar"></td>
                </tr>

            </table>
        </form>
    </div>
</body>

</html>