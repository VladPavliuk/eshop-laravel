<?php

namespace App\Http\Controllers\Shop;

use App\Models\CategoryTag;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('shop.home');
    }
}
