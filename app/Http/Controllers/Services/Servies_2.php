<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Servies_2 extends Controller
{
    public function index(Request $request)
    {
        return view('services.service-2');
    }
}
