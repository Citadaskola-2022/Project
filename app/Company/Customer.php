<?php

namespace App\Company;

class Customer extends Person
{
    private Discount $discountLevel;
    private int $walletAmount = 0;
    private int $expenses = 0;
    private int $profit;
    private array $items = [];

    public function setDiscountLevel(Discount $discountLevel)
    {
        $this->discountLevel = $discountLevel;
    }

    public function setWallet(int $wallet): void
    {
        $this->walletAmount = $this->convertToCents($wallet);
    }

    public function getExpenses(): int
    {
        return array_sum($this->items);
    }

    private function calculateBalance(): int
    {
        return $this->walletAmount - $this->getExpenses();
    }

    public function display(): void
    {
        ;

        var_dump([
            $this->getId(),
            $this->getName(),
            $this->getAge(),
            $this->getGender(),
            $this->discountLevel,
            $this->calculateBalance(),
            $this->items
        ]);
    }

    public function buyItems(string $title, float $price, int $quantity)
    {
        if ($quantity < 0) {
            throw new \InvalidArgumentException('Quantity cannot be below zero');
        }

        if ($price < 0) {
            throw new \InvalidArgumentException('Price cannot be below zero');
        }

        $id = count($this->items);
        $key = $id . '_' .  $title;

        $total = $this->convertToCents($this->applyDiscount($price * $quantity));

        if ($total > $this->walletAmount) {
            throw new \DomainException('Cannot buy so much items');
        }

        $this->items[$key] = $total;

        $this->updateWallet($total);
    }

    private function applyDiscount(float $amount): float
    {
        $discount = $this->discountLevel->discount() / 100 * $amount;

        return $amount - $discount;
    }

    private function convertToCents(float $value): int
    {
        return $value * 100;
    }

    private function updateWallet(int $total): void
    {
        $this->expenses += $total;
    }

}