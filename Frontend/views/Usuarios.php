<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Lista de Usuarios</h2>

<a href="registro.php" class="btn btn-primary mb-3">Nuevo Usuario</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr>

<?php
$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

while($fila = $resultado->fetch_assoc()):
?>

<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td><?= $fila['correo'] ?></td>
    <td><?= $fila['rol'] ?></td>
    <td>
        <a href="editar.php?id=<?= $fila['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
        <a href="eliminar.php?id=<?= $fila['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
    </td>
</tr>

<?php endwhile; ?>

</table>

</body>
</html>
