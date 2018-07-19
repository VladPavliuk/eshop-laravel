<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function viewDashboard()
    {
        $this->middleware('auth:admin');
        return view('admin.home');
    }
}