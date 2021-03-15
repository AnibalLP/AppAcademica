<?php
include 'model/conexion.php';
$sentencia=$db->query("select * from docentes;");
$docentes=$sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($alumnos);
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema Academico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema Academico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="docentes.php">Docentes</a>
                    <a class="nav-link" href="materias.php">Materias</a>
                    <a class="nav-link" href="matriculas.php">Matricula</a>

                </div>
            </div>
        </div>
    </nav>
    <hr>
    <section>
        <div>
            <h1>Docentes</h1>
            <table>
                <tr>

                    <td>codigo</td>
                    <td>nombre</td>
                    <td>direccion</td>
                    <td>telefono</td>
                    <td>dui</td>
                    <td>nit</td>
                    <td>editar</td>
                    <td>eliminar</td>
                </tr>
                <?php
                    foreach ($docentes as $datos) {
                        ?>
                <tr>

                    <td><?php echo $datos->codigo;?></td>
                    <td><?php echo $datos->nombre;?></td>
                    <td><?php echo $datos->direccion;?></td>
                    <td><?php echo $datos->telefono;?></td>
                    <td><?php echo $datos->dui;?></td>
                    <td><?php echo $datos->nit;?></td>

                    <td><a href="editardocente.php?id=<?php echo $datos->iddocente;?>">Editar</a></td>
                    <td><a href="eliminardocente.php?id=<?php echo $datos->iddocente;?>">Eliminar</a></td>
                </tr>
                <?php
        }
    ?>
            </table>
            <hr>
            <h3>Registrar docentes</h3>
            <form method="POST" action="insertdocente.php">
                <table>
                    <tr>
                        <td>codigo</td>
                        <td><input type="text" name="tcodigo"></td>
                    </tr>
                    <tr>
                        <td>nombre</td>
                        <td><input type="text" name="tnombre"></td>
                    </tr>
                    <tr>
                        <td>direccion</td>
                        <td><input type="text" name="tdireccion"></td>
                    </tr>
                    <tr>
                        <td>telefono</td>
                        <td><input type="text" name="ttelefono"></td>

                    </tr>
                    <tr>
                        <td>dui</td>
                        <td><input type="text" name="tdui"></td>

                    </tr>
                    <tr>
                        <td>nit</td>
                        <td><input type="text" name="tnit"></td>

                    </tr>
                    <input type="hidden" name="oculto" value="1">
                    <tr>
                        <td><input type="reset" name="" value="Restablecer"></td>
                        <td><input type="submit" name="" value="Guardar"></td>
                    </tr>

                </table>
            </form>
        </div>
    </section>

</body>

</html>