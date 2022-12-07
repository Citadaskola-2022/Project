<?php

namespace Snippet;

new Subscription(new BraintreeGateway());

class Subscription {

    private Gateway $paymentGateway;

    public function __construct(Gateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        // API request
        // find Stripe customer
        $this->paymentGateway->findCustomer();
        // find Stripe customer subscriptions
        $this->paymentGateway->findCustomerSubscriptions();
        // cancel in database
    }

    public function invoice()
    {

    }

    public function swap()
    {

    }
}

interface Gateway
{
    public function findCustomer();

    public function findCustomerSubscriptions();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findCustomerSubscriptions()
    {

    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {
        // TODO: Implement findCustomer() method.
    }

    public function findCustomerSubscriptions()
    {
        // TODO: Implement findCustomerSubscriptions() method.
    }
}
