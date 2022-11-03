<?php

namespace App;

class ServiceCosts
{

    private float $amount;

    public function __construct(float $amount)
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