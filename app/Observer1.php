<?php

namespace App;

use SplObserver;

class Observer1 implements SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject->getState() == 1 || $subject->getState() == 'all') {
            echo "Observer 1: notify \r\n";
        }
    }
}