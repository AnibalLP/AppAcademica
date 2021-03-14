<?php
if (!isset($_POST['oculto'])) {
    exit();
}
include 'model/conexion.php';
$codigo=$_POST['tcodigo'];
$nombre=$_POST['tnombre'];
$direccion=$_POST['tdireccion'];
$telefono=$_POST['ttelefono'];

$sentencia=$db->prepare("insert into alumnos(codigo,nombre,direccion,telefono) values(?,?,?,?);");
$resultado=$sentencia->execute([$codigo,$nombre,$direccion,$telefono]);
if ($resultado===true) {
    //echo "insertado correctamente";
    header('location:index.php');
}
else {
    echo "datos no agregados";
        }
?>