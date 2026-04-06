<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$rol = $_POST['rol'];

$sql = "UPDATE usuarios 
        SET nombre='$nombre', correo='$correo', rol='$rol' 
        WHERE id=$id";

$conexion->query($sql);

header("Location: usuarios.php");
?>
