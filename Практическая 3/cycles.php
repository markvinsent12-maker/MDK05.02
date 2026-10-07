<h1>Циклы - практическая 3</h1>
<h3>Задача 1</h3>
<?php
$startNumber = 4;
$multiplier = 3;
$quantity = 5;
$current = $startNumber;
for ($i = 1; $i <= $quantity; $i++) {
    echo $current . " ";
    $current = $current * $multiplier;
}
?>

<h3>Задача 2</h3>
<?php
$lastNumber = 15;
$sum = 0;
for ($i = 1; $i <= $lastNumber; $i++) {
    $sum = $sum + $i;
}
echo "Сумма чисел от 1 до $lastNumber = $sum";
?>

<h3>Задача 3</h3>
<?php
$lastNumber = 8;
$multiplicationResult = 1;
for ($i = 1; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $multiplicationResult = $multiplicationResult * $i;
    }
}
echo "Произведение четных чисел от 1 до $lastNumber = $multiplicationResult";
?>

<h3>Задача 4</h3>
<?php
$n = 8;
$distance = 10;
$totalDistance = 0; // Накопитель общ пути за все дни,нач с 0, чтобы потом прибавлять к нему дистанцию каждого дня
for ($day = 1; $day <= $n; $day++) {
    $totalDistance = $totalDistance + $distance;
    $distance = $distance * 1.1; // увелич дневную норму на 10% для след дня. Умножение на 1.1 = прибавление 10%
} 
echo "Сумманый путь за $n дней = " . round($totalDistance, 2) . " км"; // функция round() округляет до 2 знаков после запятой 
?>

<h3>Задача 5</h3>
<?php
$totalLegs = 64; // общее кол-во лап
echo "Все возможные комбинации:<br>"; 
for ($rabbits = 0; $rabbits <= 16; $rabbits++) { // Перебираем возможное кол-во кроликов.16 потому что 64 лапы - 4 лапы у кролика = 16 кроликов
    $remainingLegs = $totalLegs - ($rabbits * 4);
    if ($remainingLegs % 2 == 0) {
        $geese = $remainingLegs / 2;
        echo "Кроликов: $rabbits, Гусей: $geese <br>";
    }
}
?>