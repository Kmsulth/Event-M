<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class HomeController extends Controller
{
function index(){
    return view('Login');
}
} 

