<?php

namespace App\DesignPatterns\Creational\StaticFactory;

interface DataReader
{
   public static function receiveDataInfo(string $data) : string;
}
