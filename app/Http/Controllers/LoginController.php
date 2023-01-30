<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
        public function index(){
            return view('login.index', [
                'title' => 'Login',
                'active' => 'login'
            ]);
        }

        public function authenticate(Request $request){
            $credentials = $request->validate([
                'user_name' =>'required',
                'password' => 'required'
            ]);
            
            if(Auth::attempt($credentials)){
                
                $userlogin = Auth::user();
                $userlogin->last_login = Carbon::now()->format('Y/m');
                $userlogin->save();
                $request->session()->regenerate();
                return redirect()->intended('/home');
                
            }
            
            
            return back()->with('loginError', 'Login Failed!');
        }

        public function logout(){
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/login');
        }
    }
