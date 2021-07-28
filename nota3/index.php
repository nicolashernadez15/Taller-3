<?php
    include("cn.php");
    $usuarios = "SELECT * FROM usuarios";

        
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
        <title>Pagina principal</title>
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="Estilo.css">
    </head>
    <body>
        <div class="container-add">
            <h2 class="container__title">Crear contenido <a href="Apuntes.php" class="title_edit" style="top:30px;">Apuntes</a></h2>
            
            <form action="insertar.php" method="post"
            class="container__form">
                <label class="container__label" for="">Nombre:</label>
                <input class="container__input" name="Nombre" type="text"> 
                <label class="container__label" for="">Descripcion:</label>
                <input class="container__input" name="Descripcion" type="text"> 
                <input class="container__submit" type="submit"> 
            </form>
        </div>    

        <div class="container-table">
            <div class="table__title">Contenido registrado <a href="edicion_contenido.php" class="title_edit">Editar</a></div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Descripcion</div>
            <div class="table__header">Fecha creacion</div>
            <div class="table__header">Fecha actualizacion</div>
            <?php $query = "SELECT * FROM contenido"; $resultado = mysqli_query($conexion, $query);

            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__header"><?php echo $row["Nombre"]?></div>
            <div class="table__header"><?php echo $row["Descripcion"]?></div>
            <div class="table__header"><?php echo $row["fechacreacion"]?></div>
            <div class="table__header"><?php echo $row["fechaactualizacion"]?></div>
            <?php } mysqli_free_result($resultado);?>
        </div>

        <div class="container-add">
            <h2 class="container__title">Crear apunte</h2>
            
            <form action="insertar_apunte.php" method="post"
            class="container__form">
                <label class="container__label" for="">Nombre:</label>
                <input class="container__input" name="nombre" type="text"> 
                <label class="container__label" for="">Tipo:</label>
                <input class="container__input" name="tipo" type="text"> 
                <label class="container__label" for="">URL:</label>
                <input class="container__input" name="url" type="url"> 
                <input class="container__submit" type="submit"> 
            </form>
        </div>            


    </body>
</html>