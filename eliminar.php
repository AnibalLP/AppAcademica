<?php
if (!isset($_GET['id'])) {
    exit();
}
$codigo=$_GET['id'];
include 'model/conexion.php';
$sentencia=$db->prepare("delete from alumnos where idAlumno=?;");
$resultado=$sentencia->execute([$codigo]);
if ($resultado===true) {
    //echo "insertado correctamente";
    header('location:index.php');
}
else {
    echo "dato no eliminado";
        }
?>