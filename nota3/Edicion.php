<?php
    include("cn.php");
    $usuarios = "SELECT * FROM usuarios";
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
            <div class="table__title table__title--edit">Datos de usuario </div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Apellidos</div>
            <div class="table__header">Direccion</div>
            <div class="table__header">Telefono</div>
            <div class="table__header">Operacion</div>
            <?php $resultado = mysqli_query($conexion, $usuarios);

            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"]?></div>
            <div class="table__item"><?php echo $row["Apellidos"]?></div>
            <div class="table__item"><?php echo $row["Direccion"]?></div>
            <div class="table__item"><?php echo $row["Telefono"]?></div>
            <div class="table__item">
                <a href="Actualizar.php?id=<?php echo $row["Id"];?>" class="table__item__link">Editar|</a>

                <a href="Procesar_Eliminar.php?id=<?php echo $row["Id"];?>" class="table__item__link">Eliminar</a>
            </div>
            <?php } mysqli_free_result($resultado);?>
        </div>
        <script src="Confirmacion.js"></script> 
    </body>
</html>