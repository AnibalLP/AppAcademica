<?php
if (!isset($_POST['oculto'])) {
header  ('location:index.php');  
}
include 'model/conexion.php';
$id2=$_POST['id2'];
$codigo2=$_POST['tcodigo'];
$nombre2=$_POST['tnombre'];
$direccion2=$_POST['tdireccion'];
$telefono2=$_POST['ttelefono'];

$sentencia=$db->prepare("update alumnos set codigo=?,nombre=?,direccion=?,telefono=? where idAlumno=?;");
$resultado=$sentencia->execute([$codigo2,$nombre2,$direccion2,$telefono2,$id2]);

if ($resultado===true) {
    header('location:index.php');
}
else {
    echo "no se modifico";
}
?>
