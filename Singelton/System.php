<?php

namespace App\Singelton;

use App\Singelton\Engine;

class System
{
    public function run()
    {
        echo Engine::getInstance()->sum(10, 20) . '<br>';
        echo Engine::getInstance()->sum(20, 30) . '<br>';
        echo Engine::getInstance()->sum(50, 50) . '<br>';
    }
}