<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

$customer = new \App\Company\Customer(42, 'Jane', 33, \App\Company\Gender::Female);
$customer->setDiscountLevel(\App\Company\Discount::LEVEL_4);
$customer->setWallet(100);
$customer->buyItems('Coffee', 15, 2);
$customer->buyItems('Cake', 7 , 1);
//$customer->buyItems('Ice Cream', 0.75 , 5);

$customer->display();