<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {

        $currentDate = date('d/m/Y');

        $data = ['current_date' => $currentDate];

        return view('contact', $data);
    }
}
