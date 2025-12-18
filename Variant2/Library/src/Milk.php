<?php

namespace Birka\Sixth\Library;

class Milk extends Snack
{
    public function __construct()
    {
        parent::__construct("Молочный", "молочный шоколад", ["карамель", "орехи"]);
    }
}
