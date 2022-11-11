<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('forusers.home');
    }
    public function creativeWork()
    {
        return view('forusers.creativeWork');
    }
}
