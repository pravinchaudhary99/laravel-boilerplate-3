<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUser extends Controller
{
    public function index(Request $request)
    {
        return view('authenticate.login');
    }
}
