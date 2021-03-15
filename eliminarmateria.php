<?php
if (!isset($_GET['id'])) {
    exit();
}
$codigo=$_GET['id'];
include 'model/conexion.php';
$sentencia=$db->prepare("delete from materias where idmaterias=?;");
$resultado=$sentencia->execute([$codigo]);
if ($resultado===true) {
    //echo "insertado correctamente";
    header('location:materias.php');
}
else {
    echo "dato no eliminado";
        }
?>