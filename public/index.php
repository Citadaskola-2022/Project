<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

$transaction = new \App\ServiceCosts(111);
$transaction->process();


