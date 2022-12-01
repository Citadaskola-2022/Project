<?php

namespace App\DeptCollection;

interface Collector
{
    public function collect(int $ownedAmount): float;
}