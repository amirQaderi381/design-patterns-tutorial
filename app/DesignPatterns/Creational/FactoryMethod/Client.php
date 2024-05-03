<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\SimpleFactory\ProductFactory;

class Client
{
    public static function run(): array
    {
        $creditCardFactory = new CreditCardFactory('123456','1234','123/02/36');
        $creditCard = $creditCardFactory->create();

        $paypalFactory = new PaypalFactory('test@gmail.com','1234');
        $paypal = $paypalFactory->create();
        return ['creditCard' => $creditCard->processPayment() , 'paypal' => $paypal->processPayment()];


    }
}
