<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   var_dump( \App\DesignPatterns\StaticFactory\Client::run());
   var_dump(\App\DesignPatterns\SimpleFactory\Client::run());
});
