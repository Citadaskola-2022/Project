<?php

namespace App\Kriss;

class Player {
    public function __construct(
        public int $id,
        public int $number,
        public string $firstName,
        public string $lastName
    ){}

    public function __toString(): string
    {
        return sprintf('#%d (%s. %s)', $this->number, $this->firstName[0], $this->lastName);
    }
}