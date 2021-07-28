<?php
    include("cn.php");
    $usuarios = "SELECT * FROM apuntes";

    
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>apuntes registrados</title>
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="Estilo.css">
    </head>

        <div class="container-table" styles="height:90%;">
            <div class="table__title">Apuntes registrados <a href="edicion_apunte.php" class="title_edit">Editar</a></div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Tipo</div>
            <div class="table__header">URL</div>
            <div class="table__header">Prevista</div>

            <?php $query = "SELECT * FROM apuntes"; $resultado = mysqli_query($conexion, $query);

            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__header"><?php echo $row["nombre"]?></div>
            <div class="table__header"><?php echo $row["tipo"]?></div>
            <div class="table__header"><?php echo $row["url"]?></div>
            <iframe src="<?php echo $row['url']?>"frameborder="0" width="200" height="50" allow="autoplay;encrypted-media" &embedded="true"></iframe>
            <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>