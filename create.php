<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $posicion = $_POST['posicion'];

    try {
        $sql = "INSERT INTO jugadores (nombre, apellidos, posicion) VALUES (:nombre, :apellidos, :posicion)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'apellidos' => $apellidos, 'posicion' => $posicion]);

        $message = 'Jugador añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el jugador: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Jugador</title>
</head>
<body>
<h2>Añadir nuevo Jugador</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="apellidos">apellidos:</label>
    <input type="text" name="apellidos" id="apellidos" required>
    <br>
    <label for="posicion">Posición:</label>
    <input type="text" name="posicion" id="posicion" required>
    <br>
    <input type="submit" value="Añadir Jugador">
</form>

</body>
</html>
