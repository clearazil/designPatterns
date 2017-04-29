<?php

namespace App\Strategy\QuackBehaviour;

class Quack implements \App\Strategy\QuackBehaviour
{
    public function quack()
    {
        echo "Quack\n";
    }
}
