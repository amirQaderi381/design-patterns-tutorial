<?php

namespace App\DesignPatterns\SimpleFactory;

class Client
{
    public static function run(): string
    {
        $productFactory = new ProductFactory();
        $product = $productFactory->createProduct('book','clean code' ,'55.6','programming book');
        return $product->getName();
    }
}
