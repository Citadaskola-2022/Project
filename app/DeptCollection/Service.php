<?php

namespace App\DeptCollection;

class Service
{
    public function collectDept(Collector $collector): void
    {
        $ownedAmount = mt_rand(100, 1000);

        $amount = $collector->collect($ownedAmount);

        printf(
            'Collected $ %s out of $ %s',
            $amount,
            $ownedAmount
        ) . PHP_EOL;
    }
}