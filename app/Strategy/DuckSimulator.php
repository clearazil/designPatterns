<?php

namespace App\Strategy;

use App\Strategy\Ducks\MallardDuck;
use App\Strategy\Ducks\RubberDuck;
use App\Strategy\Ducks\DecoyDuck;
use App\Strategy\FlyBehaviour\FlyWithWings;

class DuckSimulator
{
    public function main($duckType)
    {
        switch ($duckType) {
            case 'mallard':
                $duck = new MallardDuck;
                break;
            case 'rubber':
                $duck = new RubberDuck;
                break;
            case 'decoy':
                $duck = new DecoyDuck;
                break;
            default:
                $duck = null;
                break;
        }

        if ($duck !== null) {
            $duck->performQuack();
            $duck->performFly();

            $duck->setFlyBehaviour(new FlyWithWings);
            $duck->performFly();

            $duck->swim();
        }
    }
}
