<?php
if (!isset($_GET['id'])) {
    exit();
}
$codigo=$_GET['id'];
include 'model/conexion.php';
$sentencia=$db->prepare("delete from docentes where iddocente=?;");
$resultado=$sentencia->execute([$codigo]);
if ($resultado===true) {
    //echo "insertado correctamente";
    header('location:docentes.php');
}
else {
    echo "dato no eliminado";
        }
?>