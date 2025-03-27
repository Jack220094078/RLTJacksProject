<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        return view('index',compact('users'));
    }
    public function getUserByUsername($username) {
        $user = User::where('username',$username)->first();
    }
    public function getUserById($id) {
        $user = User::where('id',$id)->first();
    }
    // Allowing the user to Create an Account and link to Database. For Create Account Page. 
    public function create(Request $request) {
        //dd($request->all());
        $validated = $request->validate([
            'name' => 'required',
            'username'=> 'required | min:5',
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);
        User::create([
            'name'=> $request['name'],
            'username'=> $request['username'],
            'email'=> $request['email'],
            'password'=> bcrypt($request['password']),
        ]);
        return redirect()->route("users.login")->with('success','Account Created');

    }
    public function login(Request $request) {

        $credentials = $request->validate([
            'email'=> 'required |email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        };

        return redirect()->back()->withErrors(['login'=> 'Email or Password Invalid']);
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}