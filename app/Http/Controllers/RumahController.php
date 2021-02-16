<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RumahController extends Controller
{
    public function index()
    {
        $dataRumah = 0;
        $dashboard = app('firebase.firestore')->database()->collection('Rumah')->documents();
        foreach ($dashboard as $r) {
            $dataRumah++;
        }
        return view('b.dashboard',compact('dashboard','dataRumah'));
    }
    public function post(){
        return view('rumah');
    }
    public function dataRumah(){   
        $rumah = app('firebase.firestore')->database()->collection('Rumah')->documents();
        return view('b.rumah',compact('rumah'));
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
        return redirect('/admin/dataRumah');
    }
    public function edit($id, Request $request){
        $edit = app('firebase.firestore')->database()->collection('Rumah')->document($id);
        $edit->set([
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
        return redirect('/admin/dataRumah');
    }

    public function hapus($id){
        $hapus = app('firebase.firestore')->database()->collection('Rumah')->document($id);
        $hapus->delete();

        return redirect('/admin/dataRumah');
    }
}
