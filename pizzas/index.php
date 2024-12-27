<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
</head>
<body>
    <form method="POST">
        <p>Nombre</p>
        <input type="text" name="nombre" placeholder="Insertar nombre" required><br>
        <p>Direccion</p>
        <input type="text" name="direccion" placeholder="Insertar direccion" required><br><br>
        <p>JyQ</p>
        <input type="checkbox" name="jyq"><br>
        <p>Cantidad</p>
        <input type="text" name="cantidadjyq"><br>
        <p>Napolitana</p>
        <input type="checkbox" name="napo"><br>
        <p>Cantidad</p>
        <input type="text" name="cantidadnapo"><br>
        <p>Mozzarella</p>
        <input type="checkbox" name="mozza"><br>
        <p>Cantidad</p>
        <input type="text" name="cantidadmozza"><br><br>

        <button type="submit">Confirmar</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];

        echo "<h2>Resumen del Pedido</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Dirección:</strong> $direccion</p>";

        // Usando valores predeterminados
        $cantidadjyq = $_POST['cantidadjyq'] ?? 0;
        echo "<p>Jamón y Queso: $cantidadjyq unidades</p>";

        $cantidadnapo = $_POST['cantidadnapo'] ?? 0;
        echo "<p>Napolitana: $cantidadnapo unidades</p>";

        $cantidadmozza = $_POST['cantidadmozza'] ?? 0;
        echo "<p>Mozzarella: $cantidadmozza unidades</p>";
        }
    ?>
</body>
</html>