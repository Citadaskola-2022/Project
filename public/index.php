<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

$coffee = new \App\Cafe\CoffeeWithMilk();

$iced = new \App\Cafe\IcedCoffee($coffee);
$iced->prepare(50);
$iced->addIce(5);
$iced->addIce(2);
$iced->brew();

var_dump($iced);


//$coffee->prepare(50);
//$coffee->prepare(40);
//$coffee->prepare(30);
//
//makeCoffee($coffee);
//
//$coffee->brew();
//
//function makeCoffee(\App\Cafe\Coffee $coffee): void
//{
////    if ($coffee instanceof \App\Cafe\CoffeeWithMilk) {
//         $coffee->addMilk();
////    }
//}