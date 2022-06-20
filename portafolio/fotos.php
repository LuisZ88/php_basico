<?php include "cabecera.php" ?>
<?php include "server.php" ?>
<?php

if ($_POST) {
    $objConexion = new conexion();
    $nombre = $_POST['nombre'];
    $fecha = new DateTime();
    $imagen = $fecha->getTimestamp() . "_" . $_FILES['archivo']['name'];
    $imagen_temp = $_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temp, "images/$imagen");

    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`) VALUES (NULL, '$nombre', '$imagen')";
    $objConexion->ejecutar($sql);
    header("Location: fotos.php");
}
if ($_GET) {
    $id = $_GET['borrar'];
    $objConexion = new conexion();
    $imagen = $objConexion->consultar("SELECT imagen FROM proyectos WHERE id = $id");
    unlink("images/" . $imagen[0]['imagen']);

    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =" . $id;
    $objConexion->ejecutar($sql);
}
$objConexion = new conexion();
$resultado = $objConexion->consultar("SELECT * FROM `proyectos`");
print_r($resultado);

?>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="fotos.php" method="post" enctype="multipart/form-data">

                        Nombre del proyecto: <input type="text" name="nombre" class="form-control" required><br>

                        Foto: <input type="file" name="archivo" class="form-control" required><br>
                        <input type="submit" value="enviar" class="btn btn-success">




                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Accciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $fila) { ?>
                    <tr>
                        <td><?php echo $fila['id'] ?></td>
                        <td><?php echo $fila['nombre'] ?></td>
                        <td><img src="images/<?php echo $fila['imagen']; ?>" width="100"></td>
                        <td><a class="btn btn-danger" href="?borrar=<?php echo $fila['id']; ?>">
                                Eliminar
                            </a></td>
                    </tr>
                    <?php } ?>


                </tbody>
            </table>

        </div>

    </div>
</div>






<?php include "footer.php" ?>