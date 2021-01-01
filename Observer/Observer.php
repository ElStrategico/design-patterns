<?php

namespace App\Observer;

use SplSubject;
use SplObserver;

class Observer implements SplObserver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        echo "Observer - $this->name updated<br>";
    }
}