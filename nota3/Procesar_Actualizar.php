<?php
include("cn.php");

$id= $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];

$actualizar = "UPDATE contenido SET Nombre='$Nombre', Descripcion='$Descripcion',fechaactualizacion=now() WHERE Id='$id'";
$resultado=mysqli_query($conexion, $actualizar);

if($resultado){
    echo "<script>alert('Datos guardados con exito, actualice la pagina para ver los cambios.');window.location='index.php'</script>";
}
else {
    echo "<script>alert('No se pudieron actualizar los datos');window.history.go(-1);</script>";
}
