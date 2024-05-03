<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\PaymentMethod;

class CreditCard implements PaymentMethod
{

    public function __construct(
        private readonly string $cardNumber,
        private readonly string $cvv,
        private readonly string $expiredDate
    ){

    }
    public function processPayment(): string
    {
        return 'processing payment by credit card';
    }
}
