<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(){
        return view('/login/index',[
            "title" => "Login",
            "active" => "login",
        ]);
    }
    
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'  
        ]);        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->is_admin){
               return redirect()->intended('dashboard'); 
            }  
            if(auth()->user()->is_status){
                return redirect()->intended('home'); 
            }  
            Auth::logout();   
            request()->session()->invalidate();        
            request()->session()->regenerateToken();       
            return back()->with('loginAuten', 'Harus Autentikasi Terlebih Dahulu!');  
        }        
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(){
        Auth::logout();
        
        request()->session()->invalidate();
        
        request()->session()->regenerateToken();

        return redirect('/home');
    }
}
