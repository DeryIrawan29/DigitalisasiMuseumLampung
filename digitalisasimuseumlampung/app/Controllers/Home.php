<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function koleksi()
    {
        return view('koleksi');
    }

    public function virtual_tour()
    {
        return view('virtual_tour');
    }

    public function events()
    {
        return view('events');
    }
}
