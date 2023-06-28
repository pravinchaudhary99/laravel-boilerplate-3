<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginUser extends Controller
{
    public function index(Request $request)
    {
        return view('authenticate.login');
    }

    function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('warning','Please enter valid user or password');
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if (!Hash::check($credentials['password'],$user->password)) {
            return redirect()->back()->withInput()->with('warning','Login Fail, please check email id');
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('/');
        }else{
            return redirect()->back()->with('error','Something was wrong');
        }
    }
}
