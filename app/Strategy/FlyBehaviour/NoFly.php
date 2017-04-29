<?php

namespace App\Strategy\FlyBehaviour;

class NoFly implements \App\Strategy\FlyBehaviour
{
    public function fly()
    {
        echo "I can't Fly :(\n";
    }
}
