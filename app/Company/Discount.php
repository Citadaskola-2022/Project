<?php

namespace App\Company;

enum Discount
{
    case LEVEL_0;
    case LEVEL_1;
    case LEVEL_2;
    case LEVEL_3;
    case LEVEL_4;

    public function discount(): float
    {
        return match($this) {
            \App\Company\Discount::LEVEL_0 => 0,
            \App\Company\Discount::LEVEL_1 => 3,
            \App\Company\Discount::LEVEL_2 => 5,
            \App\Company\Discount::LEVEL_3 => 8,
            \App\Company\Discount::LEVEL_4 => 12,
        };
    }
}
