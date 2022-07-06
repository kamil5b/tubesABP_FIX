<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;
use Session;
use App\Models\User;


class LoginController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function loginAPI(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] = $user->createToken('appToken')->accessToken;
            return response()->json([
                'success' => true,
                'token' => $success,
                'user' => $user,
            ]);
        } else{
            return response()->json([
                    'success' => false,
                    'message' => 'Invalid Email or Password',
                ], 401
            );
        }
       
    }
    
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'password' => ['required', 'string', 'min:8'],
        ]);
        if($validator->fails()){
         return response()->json([
          'success' => false,
          'message' => $validator->errors(),
         ], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('appToken')->accessToken;
        return response()->json([
         'success' => true,
         'token' => $success,
         'user' => $user
        ]);
    }
    public function logoutAPI(Request $request){
        if(Auth::user()){
         $user = Auth::user()->token();
         $user->revoke();
      return response()->json([
          'success' => true,
          'message' => 'Logout successfully',
         ]);
        } else{
         return response()->json([
          'success' => false,
          'message' => 'Unable to Logout',
         ]);
        }
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