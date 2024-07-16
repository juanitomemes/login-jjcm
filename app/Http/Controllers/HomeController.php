<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('start');
    }

    public function app()
    {
        return view('home.index');
    }
}
