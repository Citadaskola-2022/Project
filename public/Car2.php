<?php
declare(strict_types=1);

class Car
{
    public ?Driver $driver = null;

    //Izveido funkciju, lai varētu piešķirt objektam vērtības, kad
    //to izveido.
    public function __construct(
        public int    $odometer,
        public string $number_plate,
        public float  $fuel_consumption
    )
    {
    }
    //Izveido funkciju, lai papildinātu odometra rādītāju.
    public function addKilometers(int $kilometer): Car
    {
        //$this->odometer = $this->odometer + $kilometer;
        $this->odometer += $kilometer;
        return $this;
    }

    public function getConsumedLiters(): float
    {
        return $this->odometer * $this->fuel_consumption / 100;
    }

    //Izmanto, lai izdzēstu objektu.
    public function __destruct()
    {
        echo "Car $this->number_plate Destroyed </br>" . PHP_EOL;
    }

    public function getDriver()
    {

    }
}
