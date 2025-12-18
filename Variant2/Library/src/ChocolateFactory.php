<?php

namespace Birka\Sixth\Library;

class ChocolateFactory
{
    public function orderSnack(string $type): ?Snack
    {
        $snack = $this->createSnack($type);
        if ($snack === null) {
            echo "Такого снэка нету: {$type}" . PHP_EOL;
            return null;
        }

        $snack->prepare();
        $snack->cut();
        return $snack;
    }

    public function createSnack(string $type): ?Snack
    {
        return null;
    }
}
