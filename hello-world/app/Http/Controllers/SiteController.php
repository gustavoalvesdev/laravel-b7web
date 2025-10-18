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
        $currentDate = date('d/m/Y');
        $title = 'Serviços do dia ' . $currentDate;
        $data = ['current_date' => $currentDate];
        $data['title'] = $title;
        return view('services', $data);
    }

    public function contact()
    {
        $currentDate = date('d/m/Y');
        $data = ['current_date' => $currentDate];

        return view('contact', $data);
    }
}
