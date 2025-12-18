<?php

namespace Birka\Sixth\Library;

class Pizza
{
    private string $name;
    private string $sauce;
    /** @var string[] */
    private array $toppings = [];

    /**
    * @param array<string> $toppings
    */
    public function __construct(string $name, string $sauce, array $toppings)
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}" . PHP_EOL;
        echo "Добавлен соус {$this->sauce}" . PHP_EOL;
        echo 'Добавлены топики: ' . implode(', ', $this->toppings) . PHP_EOL;
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }
}
