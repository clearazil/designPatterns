<?php

namespace App\Strategy\QuackBehaviour;

class Squeak implements \App\Strategy\QuackBehaviour
{
    public function quack()
    {
        echo "Squeak\n";
    }
}
