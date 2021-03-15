<?php
if (!isset($_POST['oculto'])) {
header  ('location:materias.php');  
}
include 'model/conexion.php';
$id2=$_POST['id2'];
$codigo2=$_POST['tcodigo'];
$nombre2=$_POST['tnombre'];


$sentencia=$db->prepare("update materias set codigo=?,nombre=? where idmaterias=?;");
$resultado=$sentencia->execute([$codigo2,$nombre2,$id2]);

if ($resultado===true) {
    header('location:materias.php');
}
else {
    echo "no se modifico";
}
?>
