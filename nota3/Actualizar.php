<?php
    include("cn.php");
    $id = $_GET["id"];
    $usuarios = "SELECT * FROM contenido WHERE Id= '$id'";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="Estilo.css">
    </head>
    <body> 
        <form class="container-table container-table--edit" action="Procesar_actualizar.php" method="post">
            <div class="table__title table__title--edit">Apuntes </div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Descripcion</div>
            <div class="table__header">Fecha creacion</div>
            <div class="table__header">Fecha actualizacion</div><br>

            <?php $resultado = mysqli_query($conexion, $usuarios);

            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <input type="hidden" class="table__item" value="<?php echo $row["id"];?>" name="Id">
            <br><input type="text" class="table__input" value="<?php echo $row["Nombre"];?>" name="Nombre">
            <input type="text" class="table__input" value="<?php echo $row["Descripcion"];?>" name="Descripcion">
            <input type="text" class="table__input" readonly="readonly" value="<?php echo $row["fechacreacion"];?>" name="fechacreacion">
            <input type="text" class="table__input" readonly="readonly" value="<?php echo $row["fechaactualizacion"];?>" name="fechaactualizacion">
            <?php } mysqli_free_result($resultado);?>
            <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
        </form>
    </body>
</html>
