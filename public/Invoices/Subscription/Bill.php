<?php

declare(strict_types=1);

namespace Public\Invoices\Subscription;

class Bill
{
    public function __construct()
    {
        $customerProfile = new CustomerProfile();

        $email = new \App\Notifications\Email();

        var_dump($email);
    }
}