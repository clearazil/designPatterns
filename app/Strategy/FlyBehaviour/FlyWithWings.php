<?php

namespace App\Strategy\FlyBehaviour;

class FlyWithWings implements \App\Strategy\FlyBehaviour
{
    public function fly()
    {
        echo "I'm flying!\n";
    }
}
