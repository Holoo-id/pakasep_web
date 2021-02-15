<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RumahController extends Controller
{
    public function index()
    {
        return view('b.dashboard');
    }
    public function post(){
        return view('rumah');
    }
    public function select(){   
        $rumah = app('firebase.firestore')->database()->collection('Rumah')->documents();
        return view('select',compact('rumah'));
    }

    public function store(Request $request ){
        $rumah = app('firebase.firestore')->database()->collection('Rumah')->newDocument();
        $rumah->set([
            'nama_tempat' => $request->nama_tempat,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'asosiasi' => $request->asosiasi,
            'tenor' => $request->tenor,
            'bunga' => $request->bunga,
            'unit' => $request->unit,
            'ukuran' => $request->ukuran,
            'kamar' => $request->kamar,
            'kamar_mandi' => $request->kamar_mandi,
            'deskripsi' => $request->deskripsi,
            'geolokasi' => $request->geolokasi,
            'tanggal_imb' => $request->tgl_imb,
            'tanggal_dibuat' => $request->tgl_dibuat,
            'kontak' => $request->kontak,
            'gambar' => $request->gambar
            
            

        ]);
        echo "<h1>".'inserted'."</h1>";
    }
}
