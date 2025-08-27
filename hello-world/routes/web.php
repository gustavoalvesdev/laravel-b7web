<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}/{age}', function ($name, $age) {
    return view('hello', ['name' => $name, 'age' => $age]);
});
