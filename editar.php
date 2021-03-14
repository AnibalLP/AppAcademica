<?php
if (!isset($_GET['idAlumno'])) {
    header('location:index.php');
}
include 'model/conexion.php';
$id=$_GET['idAlumno'];
$sentencia=$db->prepare("select * from alumno where idAlumno=?;");
$sentencia->execute([$id]);
$persona=$sentencia->fetch(PDO::FETCH_OBJ);
PRint_r($Persona);
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
        <form method="POST" action="editarProceso.php">
            <table>
                <tr>
                    <td>Codigo</td>
                    <td><input type="text" name="tcodigo2" value="aaa"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="tnombre2" value="aaa"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="tdireccion2" value="aaa"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="ttelefono2" value="aaa"></td>
                </tr>
                <tr>
                    <td colspan=2><input type="submit" value="Modificar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>