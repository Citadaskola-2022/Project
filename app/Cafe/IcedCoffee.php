<?php

namespace App\Cafe;

class IcedCoffee
{
    private Coffee $coffee;
    private int $ice = 0;

    public function __construct(\App\Cafe\Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function addIce(int $pieces): void
    {
        $this->ice += $pieces;
    }

    public function prepare(int $volume)
    {
        $this->coffee->prepare($volume);
    }

    public function brew()
    {
        $this->coffee->brew();
    }

}