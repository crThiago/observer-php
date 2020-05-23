<?php

namespace App;

use SplObjectStorage;
use SplSubject;

class Subject implements SplSubject
{
    private $state;
    private $observers;


    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function setState($state)
    {
        $this->state = $state;
    }
    
    public function getState()
    {
        return $this->state;
    }

}
