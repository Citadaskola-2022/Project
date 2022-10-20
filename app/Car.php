<?php

declare(strict_types=1);

namespace App;

class Car
{
    public ?Driver $driver = null;

    public function __construct(
        private string $number_plate,
        private float $fuelConsumption,
        private ?int $odometer = null,
    ) {}

    public function addKilometers(int $kilometer): Car
    {
        $this->odometer += $kilometer;

        return $this;
    }

    public function getConsumedLiters(): float
    {
        return $this->odometer * $this->fuelConsumption / 100;
    }

    public function __destruct()
    {
        // echo "Car $this->number_plate Destroyed </br>" . PHP_EOL;
    }

    /**
     * @return Driver|null
     */
    public function getDriver(): ?Driver
    {
        return $this->driver;
    }
}