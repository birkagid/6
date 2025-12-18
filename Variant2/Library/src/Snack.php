<?php

namespace Birka\Sixth\Library;

class Snack
{
    protected string $name;
    protected string $chocolate;
    /** @var string[] */
    protected array $toppings = [];

    /**
    * @param array<string> $toppings
    */
    public function __construct(string $name, string $chocolate, array $toppings)
    {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Началась создание snack-а {$this->name}" . PHP_EOL;
        echo "Добавляется шоколад {$this->chocolate}" . PHP_EOL;
        echo "Добавлены начинок: " . implode(", ", $this->toppings) . PHP_EOL;
    }

    public function cut(): void
    {
        echo "Данный snack нарезают по вертикали (кусочками/кубиками/плитками)" . PHP_EOL;
    }
}
