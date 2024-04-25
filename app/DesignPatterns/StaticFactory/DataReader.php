<?php

namespace App\DesignPatterns\StaticFactory;

interface DataReader
{
   public static function receiveDataInfo(string $data) : string;
}
