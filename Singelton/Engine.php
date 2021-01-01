<?php

namespace App\Singelton;

use App\Singelton\Singelton;

class Engine
{
    use Singelton;

    public function sum($x, $y)
    {
        return $x + $y;
    }
}