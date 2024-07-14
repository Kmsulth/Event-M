<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        return view('Login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);

        $infologin =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)) {
            echo "sukses";
            exit();
        }else{
            return redirect('')->withErrors('UserName dan Password Salah')->withInput();
        }
    }
} 

