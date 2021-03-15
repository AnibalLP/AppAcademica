<?php
if (!isset($_POST['oculto'])) {
    exit();
}
include 'model/conexion.php';
$codigo=$_POST['tcodigo'];
$nombre=$_POST['tnombre'];



$sentencia=$db->prepare("insert into materias(codigo,nombre) values(?,?);");
$resultado=$sentencia->execute([$codigo,$nombre]);
if ($resultado===true) {
    //echo "insertado correctamente";
    header('location:materias.php');
}
else {
    echo "datos no agregados";
        }
?>