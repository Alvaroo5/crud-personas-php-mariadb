<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM jugadores');
$jugadores = $stmt->fetchAll();
?>

<h2>Listado de jugadores</h2>

<!-- Botón para crear un nuevo jabón -->
<a href="create.php">Crear nuevo Jugador</a>
<br><br>

<table>
<?php foreach ($jugadores as $j): ?>
    <tr>
        <td><?php echo $j['nombre']; ?> - <?php echo $j['posicion']; ?></td>
    </tr>
    <tr>
        <td><a href="edit.php?id=<?php echo $j['id']; ?>">Editar</a></td>
    </tr>
    <tr>
        <td><a href="delete.php?id=<?php echo $j['id']; ?>">Eliminar</a></td>
    </tr>
<?php endforeach; ?>
</table>

