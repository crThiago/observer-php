<?php

namespace App;

use SplObserver;

class Observer3 implements SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject->getState() == 3 || $subject->getState() == 'all') {
            echo "Observer 3: notify \r\n";
        }
    }
}
