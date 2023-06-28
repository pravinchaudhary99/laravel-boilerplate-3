<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterUser extends Controller
{
    public function index(Request $request)
    {
        return view('authenticate.register');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone_no' => 'required|min:10|max:10'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('warning','Please enter all filed required');
        }
        User::create($validator->getData());
        if (Auth::attempt(['email'=>$request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->to('/');
        }else{
            return redirect()->back()->with('error','Something was wrong');
        }
    }
}
