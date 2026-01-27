<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $mostrarRodape = true;
        return view('home', ['mostrarRodape' => $mostrarRodape]);
    }

    public function services()
    {
        $currentDate = date('d/m/Y');
        $title = 'Serviços do dia ' . $currentDate;
        $data = ['currentDate' => $currentDate];
        $data['title'] = $title;


        return view('services', $data);
    }

    public function contact()
    {
        $currentDate = date('d/m/Y');
        $data['currentDate'] = $currentDate;


        return view('contact', $data);
    }
}
