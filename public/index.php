<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

$coffee = new \App\Cafe\Coffee();

$coffee->prepare(50);
$coffee->prepare(40);
$coffee->prepare(30);
$coffee->prepare(30);

$coffee->brew();