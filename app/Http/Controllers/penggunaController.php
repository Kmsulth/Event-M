<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiAcaraModel;
use Illuminate\Http\Request;

class penggunaController extends Controller
{
    public function index()
    {
        return view('pengguna.acara');
    }

    public function dataacara(){
        $acara['judul'] = "Data Acara";
        $acara['data_acara'] = RegistrasiAcaraModel::All();
        return view("pengguna.acara",$acara);                
    }
}
