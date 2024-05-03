<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

interface PaymentMethod
{
    public function processPayment() : string;
}
