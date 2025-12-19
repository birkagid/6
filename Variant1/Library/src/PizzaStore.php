<?php

namespace Birka\Sixth\Library;

class PizzaStore
{
    public function orderPizza(string $type): ?Pizza
    {
        $pizza = $this->createPizza($type);
        if ($pizza === null) {
            echo "Такой пиццы нету: $type" . PHP_EOL;
            return null;
        }
        $pizza->prepare();
        $pizza->cut();
        return $pizza;
    }

    public function createPizza(string $type): ?Pizza
    {
        return null;
    }
}
