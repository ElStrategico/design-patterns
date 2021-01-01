<?php

namespace App\Strategy;

use App\Strategy\IPaymentStrategy;

class PaymentSystem
{
    public function run(IPaymentStrategy $paymentStrategy)
    {
        $paymentStrategy->pay();
    }
}