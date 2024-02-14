<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['name' => 'John', 'res' => 5]);
    }

    public function test()
    {
        return __METHOD__;
    }
}
