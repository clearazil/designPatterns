<?php

namespace App\Strategy\Ducks;

use App\Strategy\FlyBehaviour\NoFly;
use App\Strategy\QuackBehaviour\Squeak;

class RubberDuck extends \App\Strategy\Duck
{
    public function __construct()
    {
        $this->quackBehaviour = new Squeak;
        $this->flyBehaviour = new NoFly;
    }

    public function display()
    {
        echo "I'm a real rubber duck\n";
    }
}
