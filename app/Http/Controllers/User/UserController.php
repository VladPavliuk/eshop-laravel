<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['name'] = $request->user()->name;
        $data['email'] = $request->user()->email;
        return response()->json([
            'data' => $data,
        ]);
    }
}
