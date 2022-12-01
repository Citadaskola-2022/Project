<?php

namespace App;

class ServiceCosts
{

    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function process(): void
    {
        $this->prepareInvoice();

        $this->sendEmail();

        printf("Total amount is %.02f for the service", $this->amount);
    }

    private function prepareInvoice()
    {
    }

    private function sendEmail()
    {
        // ...
    }

}
