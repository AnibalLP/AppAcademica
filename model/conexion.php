<?php
$pass='';
$user='root';
$nombredb='db_academica';
try {
    $db=new PDO(
        'mysql:host=localhost;
        dbnombre='.$nombredb,
        $user,
        $pass
    );
} catch (exeption $e) {
    echo "error de conexion".$e->getMessage;
}

?>
