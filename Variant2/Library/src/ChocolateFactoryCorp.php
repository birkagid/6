<?php

namespace Birka\Sixth\Library;

class ChocolateFactoryCorp extends ChocolateFactory
{
    public function createSnack(string $type): ?Snack
    {
        switch ($type) {
            case 'Горький':
                return new Bitter();
            case 'Белый':
                return new White();
            case 'Молочный':
                return new Milk();
            default:
                return null;
        }
    }
}
