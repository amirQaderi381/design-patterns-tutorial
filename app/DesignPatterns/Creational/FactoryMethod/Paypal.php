<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\PaymentMethod;

class Paypal implements PaymentMethod
{

    public function __construct(
        private readonly string $email,
        private readonly string $password,
    ){

    }
    public function processPayment(): string
    {
        return 'processing payment by paypal';
    }
}
