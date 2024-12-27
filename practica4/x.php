<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1" placeholder="Ingresar el primer numero" required>
        <input type="number" name="num2" placeholder="Ingresar el segundo numero" required>
        <button type="submit">Sumar</button>
    </form>
    <?php
    $num1=$_POST("num1");
    $num2=$_POST("num2");
    $resultado=$num1+$num2;
    echo "<p> La suma de los numeros ingresados es $resultado </p>";
    ?>
</body>
</html>