<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

interface PaymentMethodFactory
{
   public function create() : PaymentMethod;
}
