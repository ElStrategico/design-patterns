<?php

namespace App\Strategy;

use App\Strategy\IPaymentStrategy;

class QiwiStrategy implements IPaymentStrategy
{
    public function pay()
    {
        echo 'Qiwi payment';
    }
}