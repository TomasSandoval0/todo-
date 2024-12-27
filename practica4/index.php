<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1" placeholder="Primer número" required>
        <input type="number" name="num2" placeholder="Segundo número" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $suma = $num1 + $num2;
        echo "<p>La suma es: $suma</p>";
    ?>
</body>
</html>