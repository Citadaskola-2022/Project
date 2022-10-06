<?php

declare(strict_types=1);

class Car
{
    private ?int $odometer;
    private string $number_plate;

    public function __construct(
        int $odometer,
        string $number_plate,
        private readonly float $fuelConsuption
    )
    {
        $this->odometer = $odometer ;
        $this->number_plate = $number_plate;
    }

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
}