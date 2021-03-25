<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;



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
        $firebase_storage_path = 'images/';

        $messages = [
            'required' => ':attribute Harus diisi!!',
            'numeric' => ':attribute Harus berupa nomor ',
            
        ];

        $validated = $request->validate([
            'nama_tempat'=> 'required',
            'alamat'=> 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'pengembang' => 'required',
            'asosiasi' => 'required',
            'tenor' => 'required',
            'bunga' => 'required',
            'unit' => 'required|numeric',
            'ukuran' => 'required',
            'kamar' => 'required|numeric',
            'kamar_mandi' => 'required|numeric',
            'deskripsi' => 'required',
            'geolokasi' => 'required',
            'tanggal_imb' => 'required',
            'tanggal_dibuat' => 'required',
            'kontak' => 'required|numeric',
            'gambar' => 'required'
        ],$messages);

        
        $rumah = app('firebase.firestore')->database()->collection('Rumah')->newDocument();
        $rumah->set([
            'nama_tempat' => $request->nama_tempat,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'pengembang' => $request->pengembang,
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
            'gambar' => $firebase_storage_path
            

        ]);
          
        $gambar = $request->gambar;
        $rumah2 = app('firebase.firestore')->database()->collection('Rumah');
        $nama_tempat = $rumah2->where('nama_tempat','==',$request->nama_tempat);
        $document = $nama_tempat->documents();
        foreach ($document as $documents) {
            $getData = $documents->id();
        }
        $nama = $getData;
        $localfolder = public_path('images') .'/';
        $extension = $gambar->getClientOriginalExtension();
        $file      = $nama. '.' . $extension;

        $gambar->move($localfolder, $file);
        $uploadedfile = fopen($localfolder.$file, 'r');
        app('firebase.storage')->getBucket()->upload($uploadedfile, ['nama' => $firebase_storage_path . $nama]);
        unlink($localfolder . $file);

        return redirect('/admin/dataRumah');
    }
    public function edit($id, Request $request){
        $firebase_storage_path = 'images/';
        $messages = [
            'required' => ':attribute Harus diisi!!',
            'numeric' => ':attribute Harus berupa nomor ',
            
        ];
        $validated = $request->validate([
            'nama_tempat'=> 'required',
            'alamat'=> 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'pengembang' => 'required',
            'asosiasi' => 'required',
            'tenor' => 'required',
            'bunga' => 'required',
            'unit' => 'required|numeric',
            'ukuran' => 'required',
            'kamar' => 'required|numeric',
            'kamar_mandi' => 'required|numeric',
            'deskripsi' => 'required',
            'geolokasi' => 'required',
            'tgl_imb' => 'required',
            'tgl_dibuat' => 'required',
            'kontak' => 'required|numeric',
            'gambar' => 'required'
        ],$messages);

        $edit = app('firebase.firestore')->database()->collection('Rumah')->document($id);
        $edit->set([
            'nama_tempat' => $request->nama_tempat,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'pengembang' => $request->pengembang,
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
            'gambar' => $firebase_storage_path
        ]);

        $gambar = $request->gambar;
        $rumah2 = app('firebase.firestore')->database()->collection('Rumah');
        $nama_tempat = $rumah2->where('nama_tempat','==',$request->nama_tempat);
        $document = $nama_tempat->documents();
        foreach ($document as $documents) {
            $getData = $documents->id();
        }
    
        $nama = $getData;
        $localfolder = public_path('images') .'/';
        $extension = $gambar->getClientOriginalExtension();
        $file      = $nama. '.' . $extension;

        $gambar->move($localfolder, $file);
        $uploadedfile = fopen($localfolder.$file, 'r');
        app('firebase.storage')->getBucket()->upload($uploadedfile, ['nama' => $firebase_storage_path . $nama]);
        unlink($localfolder . $file);


        return redirect('/admin/dataRumah');
    }

    public function hapus($id){
        $hapus = app('firebase.firestore')->database()->collection('Rumah')->document($id);
        $hapus->delete();

        return redirect('/admin/dataRumah');
    }

    public function cetak_pdf(){
     $rumah = app('firebase.firestore')->database()->collection('Rumah')->documents();
 
	$pdf = PDF::loadview('pdf.pdfrumah',['rumah'=>$rumah]);
	return $pdf->download('laporan-rumah-pdf');
    }
}
