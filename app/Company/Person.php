<?php

namespace App\Company;

abstract class Person
{
    public function __construct(
        private int $id,
        private string $name,
        private int $age,
        private Gender $gender,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getGender(): Gender
    {
        return $this->gender;
    }

    public function setGender(Gender $gender): void
    {
        $this->gender = $gender;
    }

    public function display(): void
    {
        var_dump([
            $this->getId(),
            $this->getName(),
            $this->getAge(),
            $this->getGender()
        ]);
    }

}