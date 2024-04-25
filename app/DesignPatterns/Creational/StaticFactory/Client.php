<?php

namespace App\DesignPatterns\Creational\StaticFactory;

class Client
{
   public static function run(): string
   {
       $data = DataProcessor::createData('csv'); // give obj of data (xml , json , ..)
       return $data->receiveDataInfo('csv'); // call read data form given obj of data
   }
}
