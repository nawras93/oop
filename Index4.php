<?php

class Subscription
{
    // compose the interface , and the interface it's self is implemented by classes which you need to use
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
        
    }

    public function cancel()
    {
        
    }

    public function invoice()
    {
        
    }

    public function swap($newPlan)
    {
        
    }
}


interface Gateway 
{
    public function findCustomer();

    public function findCustomerSubscription();
}


class StripeGateway implements Gateway
{
    public function findCustomer()
    {
        
    }

    public function findCustomerSubscription()
    {
        
    }
    
}


new Subscription(new StripeGateway());