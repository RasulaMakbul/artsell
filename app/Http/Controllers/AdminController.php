<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function aboutUsAdminView()
    {
        return view('admins.aboutUsAdmin');
    }
}
