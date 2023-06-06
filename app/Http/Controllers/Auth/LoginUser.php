<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginUser extends Controller
{
    public function index(Request $request)
    {
        return view('authenticate.login');
    }
}
