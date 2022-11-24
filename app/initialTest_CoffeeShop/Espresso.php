<?php

namespace App\CoffeeShop;

class Espresso
{
    public int $volume = 30;
    public array $portions = [];

    public function prepare(int $volume): void
    {
        if (array_sum($this->portions) < $this->volume) {
            $this->portions[] = $volume;
        }
    }

    public function brew()
    {
        foreach ($this->portions as $i => $portion) {
            echo sprintf('%s: adding %dml portion to cup' . PHP_EOL, $i + 1, $portion);
        }
    }
}
