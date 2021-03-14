<?php
if (!isset($_POST['oculto'])) {
    exit();
}
include 'model/conexion.php';
$codigo=$_POST['tcodigo'];
$nombre=$_POST['tnombre'];
$direccion=$_POST['tdireccion'];
$telefono=$_POST['ttelefono'];
$dui=$_POST['tdui'];
$nit=$_POST['tnit'];

$sentencia=$db->prepare("insert into docentes(codigo,nombre,direccion,telefono,dui,nit) values(?,?,?,?,?,?);");
$resultado=$sentencia->execute([$codigo,$nombre,$direccion,$telefono,$dui,$nit]);
if ($resultado===true) {
    //echo "insertado correctamente";
    header('location:docentes.php');
}
else {
    echo "datos no agregados";
        }
?>