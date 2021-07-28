<?php
    include("cn.php");
    $usuarios = "SELECT * FROM apuntes";
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
    <div class="container-table">
            <div class="table__title">Apuntes registrados <a href="index.php" class="title_edit">Home</a></div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Tipo</div>
            <div class="table__header">URL</div>
            <div class="table__header">Accion</div>
            <?php $resultado = mysqli_query($conexion, $usuarios);

            while($row=mysqli_fetch_array($resultado)) { ?>
            <div class="table__item"><?php echo $row["nombre"]?></div>
            <div class="table__item"><?php echo $row["tipo"]?></div>
            <div class="table__item"><?php echo $row["url"]?></div>
            <div class="table__item">
                
                <a href="actualizar_apunte.php?id=<?php echo $row["id"];?>" class="table__item__link">Editar| </a>

                <a href="Procesar_Eliminar.php?id=<?php echo $row["id"];?>" class="table__item__link"> |Eliminar</a>
            </div>
            <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>