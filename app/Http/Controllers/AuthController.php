<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'Login'
        ]);
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        else{
            return back()->with('failed','Username atau Password Salah');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login')->with('success','Berhasil Logout');
    }
}
