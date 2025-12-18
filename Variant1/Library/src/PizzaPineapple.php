<?php

namespace Birka\Sixth\Library;

class PizzaPineapple extends Pizza
{
    public function __construct()
    {
        parent::__construct("Гавайская", "cырный", ["ананас", "курица"]);
    }
}
