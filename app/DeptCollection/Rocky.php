<?php

namespace App\DeptCollection;

class Rocky implements Collector
{
    public function collect(int $ownedAmount): float
    {
        return $ownedAmount * 0.65;
    }
}