<?php

namespace App\Strategy\QuackBehaviour;

class MuteQuack implements \App\Strategy\QuackBehaviour
{
    public function quack()
    {
        echo "<<< Silence >>>\n";
    }
}
