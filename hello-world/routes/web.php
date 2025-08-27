<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return view('hello-world');
});

Route::get('/hello/{name}/{lastName}', function($name, $lastName) {
    return view('hello', ['name' => $name, 'lastName' => $lastName]);
});

Route::get('/hello', function() {
   return view('hello');
});
