<?php 

namespace App\Strategy\Ducks;

use App\Strategy\FlyBehaviour\FlyWithWings;
use App\Strategy\QuackBehaviour\Quack;

class MallardDuck extends \App\Strategy\Duck
{
    public function __construct()
    {
        $this->quackBehaviour = new Quack;
        $this->flyBehaviour = new FlyWithWings;
    }

    public function display()
    {
        echo "I'm a real Mallard duck\n";
    }
}
