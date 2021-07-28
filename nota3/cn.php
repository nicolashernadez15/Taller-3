<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nota3";
$conexion = mysqli_connect($servername, $username, $password, $database);


if($conexion->connect_error){

    die("error " . $conexion->connect_error);

}
?>