<?php
if (!isset($_POST['oculto'])) {
header  ('location:docentes.php');  
}
include 'model/conexion.php';
$id2=$_POST['id2'];
$codigo2=$_POST['tcodigo'];
$nombre2=$_POST['tnombre'];
$direccion2=$_POST['tdireccion'];
$telefono2=$_POST['ttelefono'];
$dui2=$_POST['tdui'];
$nit2=$_POST['tnit'];

$sentencia=$db->prepare("update docentes set codigo=?,nombre=?,direccion=?,telefono=?,dui=?,nit=? where iddocente=?;");
$resultado=$sentencia->execute([$codigo2,$nombre2,$direccion2,$telefono2,$dui2,$nit2,$id2]);

if ($resultado===true) {
    header('location:docentes.php');
}
else {
    echo "no se modifico";
}
?>
