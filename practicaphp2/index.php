<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número Primo</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Ingresa un número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        // Función para verificar si el número es primo
        function esPrimo($numero): bool {
            if ($numero <= 1) {
                return false;
            }
            // Verificar si el número es divisible por cualquier número entre 2 y el número - 1
            for ($i = 2; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    return false; // Si es divisible, no es primo
                }
            }
            return true; // Si no es divisible por nadie más, es primo
        }
        // Verificar y mostrar el resultado
        if (esPrimo(numero: $numero)) {
            echo "<p>El número $numero es primo.</p>";
        } else {
            echo "<p>El número $numero no es primo.</p>";
        }
    }
    ?>
</body>
</html>
