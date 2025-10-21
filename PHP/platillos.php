<?php
include("../PHP/conexion.php");

$resultado = $conexion->query("SELECT * FROM platillos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Platillos</title>
  <link rel="stylesheet" href="../CSS/estiloTablas.css">
</head>
<body>

  <h2>Patillos en la base de datos</h2>
  <table border="0">
    <tr><th>Nombre</th><th>Ingredientes</th><th>Preparación</th><th>Origen</th></tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
      <tr>
        <td><?= $fila["Nombre"] ?></td>
        <td><?= $fila["Ingredientes"] ?></td>
        <td><?= $fila["Preparacion"] ?></td>
        <td><?= $fila["Origen"] ?></td>
      </tr>
    <?php } ?>
  </table>

  <br><a href="../index.html">Volver al inicio</a>
</body>
</html>
