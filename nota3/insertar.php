<?php
include("cn.php");

$Nombre = $_POST["Nombre"];
$Descripcion = $_POST["Descripcion"];
$insertar = "INSERT INTO contenido(Nombre, Descripcion,fechacreacion,fechaactualizacion) VALUES ('$Nombre', '$Descripcion',now(),now())";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('contenido registrado existosamente.');window.location='index.php'</script>";
}
else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
?>