<?php

// breaks in PHP 7.4
//class fn {
//}

//function fn (){
//
//}

// still works in PHP7.4

class A {
    const fn = 'Hello const';
    static function  fn() : void
    {
        echo "Hello fn()" . PHP_EOL;
    }
}
A::fn();
echo A::fn . PHP_EOL;
