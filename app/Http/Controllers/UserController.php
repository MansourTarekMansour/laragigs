<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //show Login Form
    public function login(){
        return view('users.login');
    }

    // Log In
    public function authenticate(Request $request){
        $formFilds = $request->validate([
            "email"=> ["required","email"],
            'password'=> 'required',
        ]);
        if(Auth::attempt($formFilds)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }
        else 
        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
    }

    // Show register create form
    public function register(){
        return view("users.register");
    }

    // create new user 
    public function store(Request $request){
        $formFilds = $request->validate([
            "name"=> ["required","min:3"],
            "email"=> ["required","email", Rule::unique('users', 'email')],
            'password'=> ['required','confirmed', 'min:6'],
        ]);
        // Hash password
        $formFilds['password'] = bcrypt($request->password);
        // ceate user
        $user = User::create($formFilds);

        // login
        Auth::login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You have been logged out');
    }
}
