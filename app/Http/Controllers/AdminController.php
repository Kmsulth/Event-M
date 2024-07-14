<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pengguna');

        } else {
            return redirect()->route('login'); 
        }
    }
}
