<?php

namespace App\Strategy;

use App\Strategy\FlyBehaviour;
use App\Strategy\quackBehaviour;

abstract class Duck
{
    public $flyBehaviour;
    public $quackBehaviour;

    abstract public function display();

    public function performFly()
    {
        $this->flyBehaviour->fly();
    }

    public function performQuack()
    {
        $this->quackBehaviour->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!\n";
    }

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function setQuackBehaviour(QuackBehaviour $quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }
}
