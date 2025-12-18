<?php

namespace Birka\Sixth\Library;

class PizzaCheese extends Pizza
{
    public function __construct()
    {
        parent::__construct("Сырная", "сырный", ["моцарелла", "пармезан"]);
    }
}
