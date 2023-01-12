<?php

declare(strict_types=1);

function summation($n) {
    return $n > 0 ? summation($n-1) + $n : 0;
}

summation(8);



require __DIR__ . '/../bootstrap/app.php';

//$router = new \App\Router();
//$router->register('/', function () {
//   echo 'Index';
//});
//$router->register('/advent-of-code/1', [\App\Controllers\AdventOfCode\Day1::class, 'index']);
//
//echo $router->resolve($_SERVER['REQUEST_URI']);
