<?php

require __DIR__ . '/vendor/autoload.php';

use App\Strategy\DuckSimulator;

$duckSim = new DuckSimulator;

$duckSim->main('rubber');
