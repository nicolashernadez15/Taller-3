<?php
    include("cn.php");
    $id = $_GET["id"];
    $usuarios = "SELECT * FROM apuntes WHERE Id= '$id'";
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
        <form class="container-table container-table--edit" action="procesar_actualizar_apuntes.php" method="post">
            <div class="table__title table__title--edit">Apuntes </div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Tipo</div>
            <div class="table__header">URL</div>
            <div class="table__header">Prevista</div><br>

            <?php $resultado = mysqli_query($conexion, $usuarios);

            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <input type="hidden" class="table__item" value="<?php echo $row["id"];?>" name="id">
            <br><input type="text" class="table__input" value="<?php echo $row["nombre"];?>" name="nombre">
            <input type="text" class="table__input" value="<?php echo $row["tipo"];?>" name="tipo">
            <input type="text" class="table__input"value="<?php echo $row["url"];?>" name="url">
            <iframe src="<?php echo $row['url']?>" class="table__input" frameborder="0" width="200" height="125" allow="autoplay;encrypted-media" &embedded="true"></iframe>
            <?php } mysqli_free_result($resultado);?>
            <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
        </form>
    </body>
</html>