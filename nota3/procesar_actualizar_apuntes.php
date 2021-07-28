<?php
include("cn.php");

$id= $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$url = $_POST['url'];

$actualizar = "UPDATE apuntes SET nombre='$nombre', tipo='$tipo',url='$url' WHERE id='$id'";
$resultado=mysqli_query($conexion, $actualizar);

if($resultado){
    echo "<script>alert('Datos guardados con exito, actualice la pagina para ver los cambios.');window.location='index.php'</script>";
}
else {
    echo "<script>alert('No se pudieron actualizar los datos');window.history.go(-1);</script>";
}