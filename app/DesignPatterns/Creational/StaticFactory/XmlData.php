<?php

namespace App\DesignPatterns\Creational\StaticFactory;

class XmlData implements DataReader
{

    public static function receiveDataInfo(string $data): string
    {
        return "this is $data data";
    }
}
