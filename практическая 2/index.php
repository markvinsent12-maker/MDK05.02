<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Практическая работа 2</h1>
    <h2>Задания</h2>
    <h3>Задание 1</h3>
    <?php
    $a = 4;
    $b = 2;
    $c = 4;
    $d = 2;
    $res= ($a / $c) * ($b / $d)-(($a*$b-$c)/($c*$d));
    echo "a= $a, b=$b, c=$c, d=$d, res=$res";
    ?>
    <h3>Задание 2</h3>
    <?php
    $x = 22;
    $y = 5;
    $res= (($x + $y) / ($y + 1)) - (($x*$y-12)/(34+$x));
    echo "x= $x, y=$y, res=$res";
    ?>
    <h3>Задание 3</h3>
    <?php
    $x = 2;
    $y = 5;
    $res= (($x + 1)/($x-1))**$x+(18*$x*$y**2);
    echo "x= $x, y=$y, res=$res";
    ?>
    <h3>Задание 4</h3>
    <?php
    $x = 1;
    $y = 1;
    $res= (1+(1/$x**2))**$x-(12*$x**2*$y);
    echo "x= $x, y=$y, res=$res";
    ?>
</body>
</html>