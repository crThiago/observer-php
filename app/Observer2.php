<?php

namespace App;

use SplObserver;

class Observer2 implements SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject->getState() == 2 || $subject->getState() == 'all') {
            echo "Observer 2: notify \r\n";
        }
    }
}
