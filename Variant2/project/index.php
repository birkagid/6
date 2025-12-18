<?php

require_once "../Library/vendor/autoload.php";

use Birka\Sixth\Library\ChocolateFactoryCorp;

$factory = new ChocolateFactoryCorp();

echo "1 заказ: Горький" . PHP_EOL;
$factory->orderSnack("Горький");

echo "2 заказ: Белый" . PHP_EOL;
$factory->orderSnack("Белый");

echo "3 заказ: Молочный" . PHP_EOL;
$factory->orderSnack("Молочный");

echo "4 заказ: Дубайский" . PHP_EOL;
$factory->orderSnack("Дубайский");
