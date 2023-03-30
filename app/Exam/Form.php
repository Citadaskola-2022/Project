<?php

namespace App\Exam;

use InvalidArgumentException;

class Shape
{

    public string $nosaukums;
    public int $perimetrs;

    public function __toString(): string
    {
        return $this->nosaukums . ', perimetrs: ' . $this->perimetrs . '</br>';
    }

}

class Square extends Shape
{

    public function __construct(int $x)
    {
        $this->nosaukums = 'kvadrāts';
        $this->perimetrs = $x * 4;
    }

}

class Rectangle extends Shape
{

    public function __construct(int $x, int $y)
    {
        $this->nosaukums = 'taisnstūris';
        $this->perimetrs = $x * 2 + $y * 2;
    }

}

class Triangle extends Shape
{

    public function __construct(int $x, int $y, int $z)
    {
        

//        $sides = [...func_get_args()];
//        sort($sides);
//
//        $longest = array_pop($sides);
//
//        if (array_sum($sides) < $longest) {
//            throw new InvalidArgumentException(
//                'nevar izveidot trijstūri no šiem parametriem'
//            );
//        }
//
//        $this->nosaukums = 'trijstūris';
//        $this->perimetrs = $x + $y + $z;
    }

}


echo new Square(5);
echo new Triangle(5, 4, 3);