<?php

namespace App\DesignPatterns\Creational\StaticFactory;

class JsonData implements DataReader
{

    public static function receiveDataInfo(string $data): string
    {
        return "this is $data data";
    }
}
