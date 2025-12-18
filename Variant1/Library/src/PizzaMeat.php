<?php

namespace Birka\Sixth\Library;

class PizzaMeat extends Pizza
{
    public function __construct()
    {
        parent::__construct('Мясная', 'барбекю', ['бекон', 'курица']);
    }
}
