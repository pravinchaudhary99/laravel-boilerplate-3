<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterUser extends Controller
{
    public function index(Request $request)
    {
        return view('authenticate.register');
    }

    public function create(Request $request)
    {
        dd('request : ',$request->all());
    }
}
