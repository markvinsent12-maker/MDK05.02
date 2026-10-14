<h1>Оператор выбора</h1>
<h3>Задача 1: Название цифры</h3>

<!-- action="" означает: отправить данные на эту же страницу -->
<!-- method="get" означает: данные попадут в массив $_GET -->
<form action="" method="get">
    Введите цифру от 0 до 9: 
    <input name="digit" required>
    <input type="submit" value="Узнать">
</form>

<?php
// Проверяем, пришли ли данные из формы (через GET)
if (isset($_GET['digit'])) {
    
    // Забираем значение из массива $_GET
    $digit = $_GET['digit'];

    // Оператор выбора
    switch ($digit) {
        case 0:
            echo "zero";
            break;
        case 1:
            echo "one";
            break;
        case 2:
            echo "two";
            break;
        case 3:
            echo "three";
            break;
        case 4:
            echo "four";
            break;
        case 5:
            echo "five";
            break;
        case 6:
            echo "six";
            break;
        case 7:
            echo "seven";
            break;
        case 8:
            echo "eight";
            break;
        case 9:
            echo "nine";
            break;
        default:
            echo "Я знаю только цифры от 0 до 9";
    }
}
?>


<h3>Задача 2: Праздники месяца</h3>

<form action="" method="get">
    Введите номер месяца (1-12): 
    <input name="month" required>
    <input type="submit" value="Показать">
</form>

<?php
// Проверяем, пришел ли номер месяца через GET
if (isset($_GET['month'])) {
    
    $month = $_GET['month'];

    switch ($month) {
        case 1:
            echo "1 января — Новый год<br>7 января — Рождество";
            break;
        case 2:
            echo "23 февраля — День защитника Отечества";
            break;
        case 3:
            echo "8 марта — Международный женский день";
            break;
        case 4:
            echo "12 апреля — День космонавтики";
            break;
        case 5:
            echo "1 мая — Праздник весны и труда<br>9 мая — День Победы";
            break;
        case 6:
            echo "12 июня — День России";
            break;
        case 7:
            echo "8 июля — День семьи, любви и верности";
            break;
        case 8:
            echo "22 августа — День Государственного флага РФ";
            break;
        case 9:
            echo "1 сентября — День знаний";
            break;
        case 10:
            echo "5 октября — День учителя";
            break;
        case 11:
            echo "4 ноября — День народного единства";
            break;
        case 12:
            echo "31 декабря — Канун Нового года";
            break;
        default:
            echo "Месяца с таким номером не существует";
    }
}
?>


<h3>Задача 3: Последняя цифра квадрата</h3>

<form action="" method="get">
    Введите последнюю цифру числа (0-9): 
    <input name="lastDigit" required>
    <input type="submit" value="Узнать">
</form>

<?php
if (isset($_GET['lastDigit'])) {
    
    $lastDigit = $_GET['lastDigit'];

    switch ($lastDigit) {
        case 0:
            echo "Квадрат заканчивается на 0";
            break;
        case 1:
            echo "Квадрат заканчивается на 1";
            break;
        case 2:
            echo "Квадрат заканчивается на 4";
            break;
        case 3:
            echo "Квадрат заканчивается на 9";
            break;
        case 4:
            echo "Квадрат заканчивается на 6";
            break;
        case 5:
            echo "Квадрат заканчивается на 5";
            break;
        case 6:
            echo "Квадрат заканчивается на 6";
            break;
        case 7:
            echo "Квадрат заканчивается на 9";
            break;
        case 8:
            echo "Квадрат заканчивается на 4";
            break;
        case 9:
            echo "Квадрат заканчивается на 1";
            break;
        default:
            echo "Это не цифра";
    }
}
?>


<h3>Задача 4: Возраст</h3>

<form action="" method="get">
    Введите возраст (1-99): 
    <input name="age" required>
    <input type="submit" value="Сказать">
</form>

<?php
if (isset($_GET['age'])) {
    
    $k = $_GET['age'];

    // Проверяем исключения (11-14)
    if ($k == 11 || $k == 12 || $k == 13 || $k == 14) {
        echo "Мне $k лет";
    } else {
        // Последняя цифра числа
        $lastDigit = $k % 10;

        if ($lastDigit == 1) {
            echo "Мне $k год";
        } elseif ($lastDigit == 2 || $lastDigit == 3 || $lastDigit == 4) {
            echo "Мне $k года";
        } else {
            echo "Мне $k лет";
        }
    }
}
?>

<h3>Задача 5: Перевод массы</h3>

<!-- action="" — отправить на эту же страницу -->
<!-- method="get" — данные будут в массиве $_GET -->
<form action="" method="get">
    Масса: 
    <!-- Поле для ввода массы (число) -->
    <input name="mass" required>

    
    Введите номер единицы измерения:

    <!-- Поле для ввода номера единицы (1-5) -->
    <!-- Подсказка для пользователя, какие номера что означают -->
    1 — Килограмм

    2 — Миллиграмм

    3 — Грамм

    4 — Тонна

    5 — Центнер

    
    <input name="unit" required>

    
    <input type="submit" value="Перевести">
</form>

<?php
// Проверяем, пришли ли масса и номер единицы через GET
if (isset($_GET['mass']) && isset($_GET['unit'])) {
    
    // Получаем массу из формы
    $m = $_GET['mass'];
    
    // Получаем номер единицы измерения
    $unit = $_GET['unit'];

    // Определяем, в какую единицу переводим
    switch ($unit) {
        case 1: // Килограмм — ничего не переводим
            echo "Масса: $m кг";
            break;
        case 2: // Миллиграмм (1 кг = 1 000 000 мг)
            $result = $m / 1000000;
            echo "Масса: $result кг";
            break;
        case 3: // Грамм (1 кг = 1000 г)
            $result = $m / 1000;
            echo "Масса: $result кг";
            break;
        case 4: // Тонна (1 т = 1000 кг)
            $result = $m * 1000;
            echo "Масса: $result кг";
            break;
        case 5: // Центнер (1 ц = 100 кг)
            $result = $m * 100;
            echo "Масса: $result кг";
            break;
        default:
            // Если введен номер вне диапазона 1-5
            echo "Такой единицы измерения нет";
    }
}
?>