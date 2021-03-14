<?php
$pass='';
$user='root';
$nombredb='db_academico';
try {
    $db=new PDO(
        'mysql:host=localhost;
        dbname='.$nombredb,
        $user,
        $pass
    );
} catch (exeption $e) {
    echo "error de conexion".$e->getMessage;
}

?>
