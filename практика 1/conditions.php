<h1>Условия if</h1>
<?php
$a = 25;
if ($a < 10) {
    echo 'a меньше 10';
} elseif ($a < 20) {
    echo 'a больше 10 и меньше 20';
} elseif ($a < 30) {
    echo 'a больше 20 и меньше 30';
} else {
    echo ' a больше 30';
}
