<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $this->newEmail($user);
        

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function newEmail(User $user)
    {
        Mail::to("cristian.olteanu2017@gmail.com")->send(new WelcomeUser($user));
        // Mail::to($request->user())->cc($moreUsers)->bcc($evenMoreUsers)->send(new OrderShipped($order));
    }
}
