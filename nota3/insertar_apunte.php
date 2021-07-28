<?php
include("cn.php");

$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$url = $_POST["url"];


$insertar = "INSERT INTO apuntes(nombre, tipo,url) VALUES ('$nombre', '$tipo','$url')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('apunte registrado existosamente.');window.location='index.php'</script>";
}
else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
?>