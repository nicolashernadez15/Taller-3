<?php
    include("cn.php");
    $usuarios = "SELECT * FROM contenido";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Panel de edicion</title>
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="Estilo.css">
    </head>
    <body> 
        <div class="container-table container-table--edit">
            <div class="table__title table__title--edit">Contenidos </div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Descripcion</div>
            <div class="table__header">Fecha creacion</div>
            <div class="table__header">Fecha actualizacion</div>
            <div class="table__header">Accion</div>
            <?php $resultado = mysqli_query($conexion, $usuarios);

            while($row=mysqli_fetch_array($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"]?></div>
            <div class="table__item"><?php echo $row["Descripcion"]?></div>
            <div class="table__item"><?php echo $row["fechacreacion"]?></div>
            <div class="table__item"><?php echo $row["fechaactualizacion"]?></div>
            <div class="table__item">
                <a href="Actualizar.php?id=<?php echo $row["id"];?>" class="table__item__link">Editar| </a>

                <a href="Procesar_Eliminar.php?id=<?php echo $row["id"];?>" class="table__item__link"> |Eliminar</a>
            </div>
            <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>