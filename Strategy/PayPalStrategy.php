<?php

namespace App\Strategy;

use App\Strategy\IPaymentStrategy;

class PayPalStrategy implements IPaymentStrategy
{
    public function pay()
    {
        echo 'PayPal payment';
    }
}