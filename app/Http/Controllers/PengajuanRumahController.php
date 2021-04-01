<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PengajuanRumahController extends Controller
{
    public function index(){
        return view('b.pengajuan');
    }
    public function cetak_pdf(){
       $pdf = PDF::loadview('pdf.pdfpengajuan');
       return $pdf->download('pengajuan-pdf');
       }

    public function pengajuanPengembang(Request $request){
        

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

    }
}
