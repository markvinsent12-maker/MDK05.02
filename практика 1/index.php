<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Изучаем PHP</h1>
    <h2>Вывод на экран</h2>
    <?php
        echo "Вывод через команду echo";
    ?>
    <h3>Сокращенный echo</h3>
    <?= "Вывод через сокращение echo"?>
    <h3>Вывод чисел</h3>
    <?php
        echo 45212;
    ?>
    <h3>Переменные</h3>
    <?php
    $number = 42;
    $num1 = $number * 4;
        echo $num1;
    ?>
    <h3>Арифмитические операции</h3>
    <p> + - * / ** % </p>
    <?php
    $a = 5;
    $b = 10;
    $c = 8;
    $res =($a + $b) * $c;
    echo "a = $a, b  = $b, c = $c, res = $res";
    ?>
</body>
</html> 