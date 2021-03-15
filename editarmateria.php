<?php
if (!isset($_GET['id'])) {
    header('location:materias.php');
}
include 'model/conexion.php';
$id=$_GET['id'];
$sentencia=$db->prepare("select * from docentes where iddocente=?;");
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
        <h3>Modificar Materias</h3>
        <form method="POST" action="editarmateriaproceso.php">
            <table>
                <tr>
                    <td>Codigo</td>
                    <td><input type="text" name="tcodigo" value="<?php echo $persona->codigo;?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="tnombre" value="<?php echo $persona->nombre;?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $persona->idmaterias; ?>">
                    <td colspan=2><input type="submit" value="Modificar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>