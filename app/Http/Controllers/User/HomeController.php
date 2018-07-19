<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        return redirect()->intended(route('home-page'));
    }
}
