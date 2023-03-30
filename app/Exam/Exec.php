<?php

namespace App\Exam;

class Exec
{
    public function __construct()
    {
        try {
            echo new Square(4);
            echo new Rectangle(4, 2);
            echo new Triangle(4, 2, 1);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

}