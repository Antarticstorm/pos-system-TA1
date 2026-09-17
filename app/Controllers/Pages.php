<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'POS System'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'year'  => date('Y')
        ]);
    }
}