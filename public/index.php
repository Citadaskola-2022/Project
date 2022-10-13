<?php

declare(strict_types=1);

require_once '../app/Car.php';
require_once '../app/Driver.php';


// Homework: Driver (name, surname, age)

$car = (new Car('AB-1234', 14.6, 25000))
    ->addKilometers(200)
    ->addKilometers(500);

$liters = $car->getConsumedLiters();

var_dump($liters);
die();

$dt = new \Driver();
$dt2 = new \Driver();

/**
 * stdClass examples
 */
$json = '{"a": "Honda", "b": "Kawasaki", "c": "Suzuki"}';

// 1. casting as array
$exampleTwo = json_decode($json, true);
echo 'Type: ' . gettype($exampleTwo) . ', ';
echo '"a" value: ' . $exampleTwo['a'];
echo '</br>' . PHP_EOL;
var_dump($exampleTwo);

echo '</br>' . PHP_EOL;
echo '</br>' . PHP_EOL;

// 2. casting as object
$exampleTwo = json_decode($json);
echo 'Type: ' . gettype($exampleTwo) . ', ';
echo '"b" value: ' . $exampleTwo->b;
echo '</br>' . PHP_EOL;
var_dump($exampleTwo);

echo '</br>' . PHP_EOL;
echo '</br>' . PHP_EOL;

// 3. creating new stdClass object
$exampleNewObject = new \stdClass();
$exampleNewObject->a = 'KTM';
$exampleNewObject->b = 'BMW';
$exampleNewObject->c = 'Triumph';

var_dump($exampleNewObject); // object
echo '</br>' . PHP_EOL;
var_dump((array) $exampleNewObject); // casting to array
echo '</br>' . PHP_EOL;
echo '</br>' . PHP_EOL;

// 4. From array to object
$array = [1, 2, 3];
$object = (object) $array;
//var_dump($object);
echo '</br>' . PHP_EOL;
var_dump($object->{1});
echo '</br>' . PHP_EOL;

echo '</br>' . PHP_EOL;


//require __DIR__ . '/../bootstrap/app.php';
