<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;
use Session;


class LoginController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request) {

        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $result = $request->only('email','password');
        if (Auth::attempt($result)) {
            // Authentication passed...
            return redirect()->intended('welcome');
        }

        return Redirect::to('login')->withSuccess('Oppes! You have entered invalid credentials');

    }

    public function home() {

        return view('welcome');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('welcome');
    }
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('home');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
}