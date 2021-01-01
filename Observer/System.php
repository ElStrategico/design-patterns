<?php

namespace App\Observer;

use App\Observer\User;
use App\Observer\Observer;

class System
{
    public function run()
    {
        $observers = [
            new Observer('John'),
            new Observer('Mike'),
            new Observer('Roddy')
        ];

        $user = new User('User');

        foreach($observers as $observer)
        {
            $user->attach($observer);
        }

        $user->setName('Foo');
    }
}