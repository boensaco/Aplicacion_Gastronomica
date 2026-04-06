<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$resultado = $conexion->query($sql);
$usuario = $resultado->fetch_assoc();
?>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>"><br>
    <input type="email" name="correo" value="<?= $usuario['correo'] ?>"><br>

    <select name="rol">
        <option value="usuario">Usuario</option>
        <option value="admin">Admin</option>
    </select><br>

    <button type="submit">Actualizar</button>
</form>
