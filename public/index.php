<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

// Polymorphism

/*
šādi gadījumi ir reti, kad index izsauc pa taisno

$collector = new \App\DeptCollection\Agency();
$collectedAmount = $collector->collect(100);
var_dump($collectedAmount);

$collector = new \App\DeptCollection\Rocky();
$collectedAmount = $collector->collect(100);
var_dump($collectedAmount);
*/

(new \App\DeptCollection\Service())
->collectDept(new \App\DeptCollection\Agency());
