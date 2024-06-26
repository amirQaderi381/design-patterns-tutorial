<?php

namespace App\DesignPatterns\Creational\SimpleFactory;

class Book
{
   public function __construct(
       private readonly string $name,
       private readonly float $price,
       private readonly string $description
   )
   {
   }

   public function getName() : string {
       return $this->name;
   }
   public function getPrice() : string{
       return $this->price;
   }

   public function getDescription() : string {
       return $this->description;
   }
}
