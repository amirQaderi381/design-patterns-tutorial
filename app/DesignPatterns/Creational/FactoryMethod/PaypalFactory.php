<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\PaymentMethodFactory;

class PaypalFactory implements PaymentMethodFactory
{
    public function __construct(
        private readonly string $email,
        private readonly string $password,

    ){

    }

    public function create(): PaymentMethod
    {
        return new Paypal($this->email , $this->password);
    }
}
