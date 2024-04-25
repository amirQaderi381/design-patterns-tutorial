<?php

namespace App\DesignPatterns\StaticFactory;

use App\DesignPatterns\StaticFactory\DataReader;

class XmlData implements DataReader
{

    public static function receiveDataInfo(string $data): string
    {
        return "this is $data data";
    }
}
