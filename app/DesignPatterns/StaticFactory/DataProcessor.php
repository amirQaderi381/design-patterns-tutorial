<?php

namespace App\DesignPatterns\StaticFactory;

use http\Exception\InvalidArgumentException;
use function Laravel\Prompts\error;

class DataProcessor
{
    //static factory pattern : give data ob based arg
   public static function createData(string $type): DataReader
   {
       return match ($type) {
           'csv' => new CsvData(),
           'xms' => new XmlData(),
           'json' => new JsonData(),
           default => throw new InvalidArgumentException()

       };
   }
}
