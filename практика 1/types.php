<h1>Типы данных в PHP</h1>
<h2>Целые числа - int</h2>
 <?php
$number = 0x354F2C;
echo $number;
?>
<h2>Числа с плавающей точкой - float</h2>
<?php
$a = -42.5;
$b = 42.;
$c = 1.5e5;
$d = 2.4E-3;
echo "$a, $b, $c, $d";
?>
<h2>Строки- string</h2>
$str = 'Переменная a = $a';
$str1 = "Переменная a = $a";
$str2 = "'WWW'";
echo $str, '<br>', $str1, '<br>', $str2;
?> 
<h2>Логические значения - bool</h2>
<?php
$t = true;
$f = false;
echo "t = $t, f = $f";
?>
<h2>Специальное значение null</h2>
<?php
$n = null;
echo "n = $n";
