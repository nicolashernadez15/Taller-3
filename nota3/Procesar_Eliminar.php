<?php
include("cn.php");

$id= $_GET['id'];
$eliminar = "DELETE FROM contenido WHERE Id = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar){
    header("Location: edicion_contenido.php");
} else {
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}