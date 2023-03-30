<?php


declare(strict_types=1);


class Auto
{
    public string $razotajs;
    public string $modelis;
    public int $izlaisanasGads;
    //Paterins uz 100 km.
    public float $paterins;


    public function __construct(string $razotajs, string $modelis, int $izlaisanasGads, float $paterins)
    {
        $this->razotajs = $razotajs;
        $this->modelis = $modelis;
        $this->izlaisanasGads = $izlaisanasGads;
        $this->paterins = $paterins;
    }


    public function kopejaCena(float $attalums, float $paterins = 0.0): float
    {


        //Aprēķina patēriņu uz 1 km, iegūst vajadzīgo degvielu attiecīgajam attālumam un pareizina ar litra cenu.
        return ($this->paterins / 100) * $attalums * ($this->degvielasCena);
    }
}


class benzinaAuto extends Auto
{
    public float $degvielasCena = 1.557;


    public function set_degvielasCenaBenzinam(float $degvielasCena)
    {
        $this->degvielasCena = $degvielasCena;
    }
}


class dizelAuto extends Auto
{
    public float $degvielasCena = 1.557;


    public function set_degvielasCenaDizelim(float $degvielasCena)
    {
        $this->degvielasCena = $degvielasCena;
    }
}


$masina1 = new benzinaAuto('BMW', '320i', 2022, 7.6);
$masina2 = new dizelAuto('Audi', 'A4', 2022, 4.5);

var_dump($masina1->kopejaCena(220));
var_dump($masina2->kopejaCena(220));
