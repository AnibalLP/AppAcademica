<?php
if (!isset($_GET['id'])) {
    header('location:index.php');
}
include 'model/conexion.php';
$id=$_GET['id'];
$sentencia=$db->prepare("select * from alumnos where idAlumno=?;");
$sentencia->execute([$id]);
$persona=$sentencia->fetch(PDO::FETCH_OBJ);
//PRint_r($Persona);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <h3>Modificar Alumno</h3>
        <form method="POST" action="editarproceso.php">
            <table>
                <tr>
                    <td>Codigo</td>
                    <td><input type="text" name="tcodigo" value="<?php echo $persona->codigo; ?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="tnombre" value="<?php echo $persona->nombre;?>"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="tdireccion" value="<?php echo $persona->direccion;?>"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="ttelefono" value="<?php echo $persona->telefono;?>"></td>
                </tr>
                <tr>
                <input type="hidden" name="oculto">
                <input type="hidden" name="id2" value="<?php echo $persona->idAlumno; ?>">
                    <td colspan=2><input type="submit" value="Modificar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>