<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Home Index Page';
    }

    public function about() 
    {
        return 'About Page';
    }
}
