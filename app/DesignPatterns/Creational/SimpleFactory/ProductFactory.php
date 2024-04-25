<?php

namespace App\DesignPatterns\Creational\SimpleFactory;

use http\Exception\InvalidArgumentException;

class ProductFactory
{
    public function createProduct(string $type , string $name , float $price , string $description): Laptop|Book
    {
        return match ($type) {
            'book' => new Book($name,$price,$description),
            'laptop' => new Laptop($name,$price,$description),
            default => throw new InvalidArgumentException()
        };
    }
}
