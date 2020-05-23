<?php

use App\Observer1;
use App\Observer2;
use App\Observer3;
use App\Subject;

$subject = new Subject();

$obj1 = new Observer1();
$obj2 = new Observer2();
$obj3 = new Observer3();

$subject->attach($obj1);
$subject->attach($obj2);
$subject->attach($obj3);

$subject->setState(3); 

$subject->notify();
// Observer 3: notify 

$subject->setState('all');

$subject->notify();
// Observer 1: notify 
// Observer 2: notify 
// Observer 3: notify 

$subject->detach($obj1);
$subject->detach($obj3);

$subject->setState('all');

$subject->notify();
// Observer 2: notify 