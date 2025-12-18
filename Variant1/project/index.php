<?php

require_once '../Library/vendor/autoload.php';

use Birka\Sixth\Library\PizzaStoreDodo;

$store = new PizzaStoreDodo();

echo "1 заказ: Гавайская" . PHP_EOL;
$store->orderPizza('Ананас');

echo "2 заказ: Мясная" . PHP_EOL;
$store->orderPizza('Мясо');

echo "3 заказ: Сырная" . PHP_EOL;
$store->orderPizza('Сыр');

echo "4 заказ: Шоколадная" . PHP_EOL;
$store->orderPizza('Шоколад');
