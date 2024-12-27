<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel de Estudios</title>
</head>
<body>
    <form method="POST">
        <p>Nombre:</p>
        <input type="text" name="nombre" placeholder="Ingresa tu nombre" required><br><br>
        
        <p>Nivel de estudios:</p>
        <input type="radio" name="estudios" value="No tiene estudios" required> No tiene estudios<br>
        <input type="radio" name="estudios" value="Estudios primarios"> Estudios primarios<br>
        <input type="radio" name="estudios" value="Estudios secundarios"> Estudios secundarios<br><br>

        <button type="submit">Enviar</button>
    </form>
    <?php
            // Recuperar los valores directamente
            $nombre = $_POST['nombre'] ?? 'Sin nombre';
            $estudios = $_POST['estudios'] ?? 'No especificado';
            // Mostrar los datos
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Nivel de estudios:</strong> $estudios</p>";
    ?>
</body>
</html>