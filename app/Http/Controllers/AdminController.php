<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
     {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return view('admin');
            } elseif ($user->role === 'pengguna') {
                return view('pengguna.pengguna');
            } elseif ($user->role === 'penyelenggara') {
                return view('penyelenggara');
            } else {
                // Jika level tidak dikenali, bisa diarahkan ke halaman default atau ditangani sesuai kebutuhan
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
