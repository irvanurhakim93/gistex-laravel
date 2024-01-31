<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');    
    // }

    public function index()
    {
        return view('login');

    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            info('User logged in successfully:', ['email' => $request->email]);
            return redirect()->intended('/dashboard')->withSuccess('Signed in');
        }
    
        info('Login failed for user:', ['email' => $request->email]);
        return redirect()->to('/login')->withErrors(['error' => 'Data ini tak sesuai dengan database kami']);
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }

    public function getAllUsers()
    {
        $users = (new User())->all();
        return response()->json($users, 200);    
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
