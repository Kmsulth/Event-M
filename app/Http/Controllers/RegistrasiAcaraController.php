<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RegistrasiAcaraModel;

class RegistrasiAcaraController extends Controller
{
    public function index()
    {
        // Method untuk menampilkan form registrasi acara
        return view('registrasi');
    }

    public function dataregis(){
        $paket['judul'] = "Lihat Data";
        $paket['data_regis'] = RegistrasiAcaraModel::All();
        return view("registrasi",$paket);                              
    }

    public function insert(Request $request)
    {       
        $bannerPath = $request->file('banner')->store('uploads', 'public');
        $data = new RegistrasiAcaraModel();

            $data->id_penyelenggara = Auth::id();
            $data->nama_acara = $request->nama_acara;
            $data->deskripsi_acara = $request->deskripsi_acara;
            $data->tanggal_acara = $request->tanggal_acara;
            $data->jam_mulai = $request->jam_mulai;
            $data->jam_selesai = $request->jam_selesai;
            $data->lokasi = $request->lokasi;
            $data->harga = $request->harga;
            $data->stok_tiket = $request->stok_tiket;
            $data->aturan_acara = $request->aturan_acara;
            $data->banner = $bannerPath;
            $data->save();
        return redirect()->route('dataregis')->with('success', 'Acara berhasil didaftarkan!');
    }
}
