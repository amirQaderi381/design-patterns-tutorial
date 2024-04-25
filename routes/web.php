<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   var_dump( \App\DesignPatterns\Creational\StaticFactory\Client::run());
   var_dump(\App\DesignPatterns\Creational\SimpleFactory\Client::run());
});
