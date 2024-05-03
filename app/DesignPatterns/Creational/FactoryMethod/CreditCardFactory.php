<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\PaymentMethodFactory;

class CreditCardFactory implements PaymentMethodFactory
{
    public function __construct(
        private readonly string $cardNumber,
        private readonly string $cvv,
        private readonly string $expiredDate
    ){

    }

    public function create(): PaymentMethod
    {
        return new CreditCard($this->cardNumber , $this->cvv , $this->expiredDate);
    }
}
