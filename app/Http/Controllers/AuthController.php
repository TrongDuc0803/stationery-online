<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //show login page
    public function showLogin(){
        return view('pages.login');
    }

    //show register page
    public function showRegister(){
        return view('pages.register');
    }

    //register user
    public function postRegister(Request $request){
        //validation
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        //registeration
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return back()->with('success','Succesfully Logged In');
    }

    //login user
    public function postLogin(Request $request) {
        $details = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($details)){
            return redirect()->intended('/');
        } 
        return back()->withErrors([
            'email' => 'Username or password is incorrect' ,
            'password' => 'Username or password is incorrect'
        ]);
    }

    //logout
    public function logout() {
        Auth::logout();
        return back();
    }
}
