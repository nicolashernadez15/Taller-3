<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="Estilo.css">
    </head>
    <body>
        <div class="container-add">
            <h2 class="container__title">Registrar Usuario</h2>
            <form action="insertar.php" method="post" class="container__form">
                <label for="" class="container__label">Nombre:</label>
                <input name="Nombre" type="text" class="container__input">
                <label for="" class="container__label">Apellidos:</label>
                <input name="Apellidos" type="text" class="container__input">
                <label for="" class="container__label">Dirección:</label>
                <input name="Direccion" type="text" class="container__input">
                <label for="" class="container__label">Teléfono:</label>
                <input name="Telefono" type="number" class="container__input"> 
                <input class="container__submit" type="submit" value="Registrar">
            </form>
        </div>
    </body>    
</html>    