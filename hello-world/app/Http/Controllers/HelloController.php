<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function helloWorld($nome, $idade)
    {
        $data = ['nome' => $nome, 'idade' => $idade];
        return view('hello', $data);
    }
}
