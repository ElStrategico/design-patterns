<?php

namespace App\Observer;

use SplSubject;
use SplObserver;
use SplObjectStorage;

class User implements SplSubject
{
    private $name;

    private $observers = [];

    public function __construct($name)
    {
        $this->name = $name;
        $this->observers = new SplObjectStorage();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}