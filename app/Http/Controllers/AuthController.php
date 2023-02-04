<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function loginPost(Request $request)
    {
        $user = User::where('username', $request->email)->first();
        if(password_verify($request->password, $user->password)) {
            Auth::login($user, $request->remember == 'on' ? true : false);
            return redirect()->route('home');
        } 

        $user = User::where('username', $request->email)->where('password', bcrypt($request->password))->first();

        if($user) {
            Auth::login($user, $request->remember == 'on' ? true : false);
            return redirect()->route('home');
        }

        session()->flash('error', 'Emailul sau parola sunt incorecte!');
        return redirect()->back();
    }

    public function register()
    {
        return view('user.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'username' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
