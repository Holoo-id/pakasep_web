<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PengajuanPerumahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Stream\Stream;
use Illuminate\Support\Facades\Session;


class PengembangController extends Controller
{
    public function editPerumahan()
    {
        return view('backend.pengembang.edit_perumahan');
    }
    public function dataPerumahan()
    {
        return view('backend.pengembang.data_perumahan');
    }
    public function pengajuanPerumahan(Request $request)
    {
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $rest = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');

        $provinsi = $response->json();
        $getIdProvinsi = $response->json();

    
       
        $tipeRumah = $request->namaTipe_rumah;

        
        return view('backend.pengembang.pengajuan_perumahan',compact('provinsi','tipeRumah'));
    }
    public function profil()
    {
        return view('backend.pengembang.profil');
    }
    public function statusPengajuan(Request $request)
    {
        $request->session()->forget('pengajuanPerumahan');
        return view('backend.pengembang.status_pengajuan');
    }

    public function kota(Request $request, $id){
       
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$id);
        $kota = $response->json();


        return $kota;
    }
    public function kecamatan(Request $request, $id){
       
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='.$id);
        $kecamatan = $response->json();


        return $kecamatan;
    }
    public function kelurahan(Request $request, $id){
       
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan='.$id);
        $kelurahan = $response->json();


        return $kelurahan;
    }
    public function uploadImage(Request $request ){
        $firebase_storage_path = 'images/';

        
        $rumah = app('firebase.firestore')->database()->collection('GambarRumahPengembang')->newDocument();
        $rumah->set([
            'idPengembang' => Session::get('id'),
            'Instansi'  => Session::get('instansi'),
            'fotoDepanRumah' => $firebase_storage_path,
            'fotoDalamRumah' => $firebase_storage_path,
            'fotoJalan' => $firebase_storage_path,
            'fotoGerbangPerumahan' => $firebase_storage_path
        ]);
        $gambar = $request->fotoDepanRumah;
        $gambar2 = $request->fotoDalamRumah;
        $gambar3 = $request->fotoJalan;
        $gambar4 = $request->fotoGerbangPerumahan;

        $nama = $request->txtFotoDepanRumah;
        $nama2 = $request->txtFotoDalamRumah;
        $nama3 = $request->txtFotoJalan;
        $nama4 = $request->txtFotoGerbangPerumahan;

        $localfolder = public_path('images') .'/';

        $extension = $gambar->getClientOriginalExtension();
        $extension2 = $gambar2->getClientOriginalExtension();
        $extension3 = $gambar3->getClientOriginalExtension();
        $extension4 = $gambar4->getClientOriginalExtension();

        $file      = $nama. '.' . $extension;
        $file2      = $nama2. '.' . $extension2;
        $file3      = $nama3. '.' . $extension3;
        $file4     = $nama4. '.' . $extension4;

        $gambar->move($localfolder, $file);
        $gambar2->move($localfolder, $file2);
        $gambar3->move($localfolder, $file3);
        $gambar4->move($localfolder, $file4);

        $uploadedfile = fopen($localfolder.$file, 'r');
        $uploadedfile2 = fopen($localfolder.$file2, 'r');
        $uploadedfile3 = fopen($localfolder.$file3, 'r');
        $uploadedfile4 = fopen($localfolder.$file4, 'r');

        app('firebase.storage')->getBucket()->upload($uploadedfile, ['nama' => $firebase_storage_path . $nama]);
        app('firebase.storage')->getBucket()->upload($uploadedfile2, ['nama2' => $firebase_storage_path . $nama2]);
        app('firebase.storage')->getBucket()->upload($uploadedfile3, ['nama3' => $firebase_storage_path . $nama3]);
        app('firebase.storage')->getBucket()->upload($uploadedfile4, ['nama4' => $firebase_storage_path . $nama4]);

        unlink($localfolder . $file);
        unlink($localfolder . $file2);
        unlink($localfolder . $file3);
        unlink($localfolder . $file4);
      
    }
    public function store(Request $request){
        $firebase_storage_path = 'application/'; 
        $firebase_storage_path_images = 'images/'; 

        $rumah = app('firebase.firestore')->database()->collection('Rumah')->newDocument();
        $rumah->set([
            'Id Pengembang' => Session::get('id'),
            'Instansi'  =>  Session::get('instansi'),
            'Nama Tipe Rumah' => $request->namaTipe_verif,
            'Kamar Mandi' => $request->kamarMandi_verif,
            'Harga' => $request->harga_verif,
            'Teknis Atap' => $request->teknisAtap_verif,
            'Luas Lahan' => $request->luasLahan_verif,
            'Teknis Dinding' => $request->teknisDinding_verif,
            'Luas Bangunan' => $request->luasBangunan_verif,
            'Teknis Lantai' => $request->teknisLantai_verif,
            'Kamar Tidur' => $request->kamarTidur_verif,
            'Teknis Pondasi' => $request->teknisPondasi_verif,
            'Nama Perumahan' => $request->namaPerumahan_verif,
            'Provinsi' => $request->provinsi_verif,
            'Jenis Perumahan' => $request->jenisPerumahan_verif,
            'Nomor IMB' => $request->nomorIMB_verif,
            'Alamat Perumahan' => $request->alamatPerumahan_verif,
            'Nik pemilik IMB' => $request->nik_verif,
            'Kelurahan' => $request->kelurahan_verif,
            'Tanggal IMB' => $request->tanggalIMB_verif,
            'Kecamatan' => $request->kecamatan_verif,
            'Kota' => $request->kota_verif,
            'PDF IMB' => $firebase_storage_path,
            'Foto Siteplan' => $firebase_storage_path_images

        ]);
          
        $pdf = $request->pdfIMB_verif;
        $siteplan = $request->siteplan_verif;

        $rumah2 = app('firebase.firestore')->database()->collection('Rumah');
        $getDataPengembang = $rumah2->where('Id Pengembang','==',Session::get('id'));
        $document = $getDataPengembang->documents();
        foreach ($document as $documents) {
            $getData = $documents->id();
        }
        $nama = $getData;
        $localfolder = public_path('images') .'/';
        $localfolder2 = public_path('pdf') .'/';

        $extension = $pdf->getClientOriginalExtension();
        $extension2 = $siteplan->getClientOriginalExtension();

        $file      = $nama. '.' . $extension;
        $file2     = $nama. '.' . $extension2;

        $pdf->move($localfolder, $file);
        $siteplan->move($localfolder2, $file2);

        $uploadedfile = fopen($localfolder.$file, 'r');
        $uploadedfile2 = fopen($localfolder2.$file2, 'r');

        app('firebase.storage')->getBucket()->upload($uploadedfile, ['nama' => $firebase_storage_path . $nama]);
        app('firebase.storage')->getBucket()->upload($uploadedfile2, ['nama' => $firebase_storage_path . $nama]);

        unlink($localfolder . $file);
        unlink($localfolder2 . $file2);
    }

    // PENGAJUAN WAS HERE
        // STEP 1
            public function pengajuanDataRumah(Request $request)
            {
                $pengajuanPerumahan = $request->session()->get('pengajuanPerumahan');
                $tipeRumah = $request->namaTipe_rumah;
                return view('backend.pengembang.pengajuan.step-1',compact('pengajuanPerumahan', 'tipeRumah'));
            }
            public function postDataRumah(Request $request)
            {
                $validasi = $request->validate([
                    'namaTipe_rumah' => 'required',
                    'kamarMandi_rumah' => 'required|numeric',
                    'harga_rumah' => 'required|numeric',
                    'teknisAtap_rumah' => 'required',
                    'luasLahan_rumah' => 'required|numeric',
                    'teknisDinding_rumah' => 'required',
                    'luasBangunan_rumah' => 'required|numeric',
                    'teknisLantai_rumah' => 'required',
                    'kamarTidur_rumah' => 'required|numeric',
                    'teknisPondasi_rumah' => 'required',
                ]);
                if(empty($request->session()->get('pengajuanPerumahan'))){
                    $pengajuanPerumahan = new PengajuanPerumahan();
                    $pengajuanPerumahan->fill($validasi);
                    $request->session()->put('pengajuanPerumahan', $pengajuanPerumahan);
                }else{
                    $pengajuanPerumahan = $request->session()->get('pengajuanPerumahan');
                    $pengajuanPerumahan->fill($validasi);
                    $request->session()->put('pengajuanPerumahan', $pengajuanPerumahan);
                }
                return redirect(route('step-2'));
            }
        // STEP 2
            public function pengajuanDokumen(Request $request)
            {
                $pengajuanPerumahan = $request->session()->get('pengajuanPerumahan');
                $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
                $rest = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
                $provinsi = $response->json();
                $getIdProvinsi = $response->json();
                $jenisPerumahan = ['Jenis 1', 'Perumahan 2', 'Jenis Perumahan 3'];
                return view('backend.pengembang.pengajuan.step-2',compact('pengajuanPerumahan', 'provinsi', 'jenisPerumahan'));
            }
            public function postDokumen(Request $request)
            {
                $validasi = $request->validate([
                    'namaPerumahan_dok' => 'required',
                    'provinsi_dok' => 'required',
                    'jenisPerumahan_dok' => 'required',
                    'nomorIMB_dok' => 'required|numeric',
                    'alamatPerumahan_dok' => 'required',
                    'nik_dok' => 'required|numeric',
                    'kelurahan_dok' => 'required',
                    'tanggalIMB_dok' => 'required|date',
                    'kecamatan_dok' => 'required',
                    'pdfIMB_dok' => 'required',
                    'kota_dok' => 'required',
                    'siteplan_dok' => 'required',
                ]);
                if(empty($request->session()->get('pengajuanPerumahan'))){
                    $pengajuanPerumahan = new PengajuanPerumahan();
                    $pengajuanPerumahan->fill($validasi);
                    $request->session()->put('pengajuanPerumahan', $pengajuanPerumahan);
                }else{
                    $pengajuanPerumahan = $request->session()->get('pengajuanPerumahan');
                    $pengajuanPerumahan->fill($validasi);
                    $request->session()->put('pengajuanPerumahan', $pengajuanPerumahan);
                }
                return redirect(route('step-3'));
            }
        // STEP 3
            public function pengajuanFoto(Request $request)
            {
                return view('backend.pengembang.pengajuan.step-3');
            }
            public function postFoto(Request $request)
            {
                $validasi = $request->validate([
                    'fotoDepanRumah' => 'required',
                    'fotoDalamRumah' => 'required',
                    'fotoJalan' => 'required',
                    'fotoGerbangPerumahan' => 'required',
                ]);
                $firebase_storage_path = 'images/';

        
                $rumah = app('firebase.firestore')->database()->collection('GambarRumahPengembang')->newDocument();
                $rumah->set([
                    'idPengembang' => Session::get('id'),
                    'Instansi'  => Session::get('instansi'),
                    'fotoDepanRumah' => $firebase_storage_path,
                    'fotoDalamRumah' => $firebase_storage_path,
                    'fotoJalan' => $firebase_storage_path,
                    'fotoGerbangPerumahan' => $firebase_storage_path
                ]);
                $gambar = $request->fotoDepanRumah;
                $gambar2 = $request->fotoDalamRumah;
                $gambar3 = $request->fotoJalan;
                $gambar4 = $request->fotoGerbangPerumahan;

                $nama = $request->txtFotoDepanRumah;
                $nama2 = $request->txtFotoDalamRumah;
                $nama3 = $request->txtFotoJalan;
                $nama4 = $request->txtFotoGerbangPerumahan;

                $localfolder = public_path('images') .'\\';

                $extension = $gambar->getClientOriginalExtension();
                $extension2 = $gambar2->getClientOriginalExtension();
                $extension3 = $gambar3->getClientOriginalExtension();
                $extension4 = $gambar4->getClientOriginalExtension();

                $file      = $nama. '.' . $extension;
                $file2      = $nama2. '.' . $extension2;
                $file3      = $nama3. '.' . $extension3;
                $file4     = $nama4. '.' . $extension4;

                $gambar->move($localfolder, $file);
                $gambar2->move($localfolder, $file2);
                $gambar3->move($localfolder, $file3);
                $gambar4->move($localfolder, $file4);

                $uploadedfile = fopen($localfolder.$file, 'r');
                $uploadedfile2 = fopen($localfolder.$file2, 'r');
                $uploadedfile3 = fopen($localfolder.$file3, 'r');
                $uploadedfile4 = fopen($localfolder.$file4, 'r');

                app('firebase.storage')->getBucket()->upload($uploadedfile, ['nama' => $firebase_storage_path . $nama]);
                app('firebase.storage')->getBucket()->upload($uploadedfile2, ['nama2' => $firebase_storage_path . $nama2]);
                app('firebase.storage')->getBucket()->upload($uploadedfile3, ['nama3' => $firebase_storage_path . $nama3]);
                app('firebase.storage')->getBucket()->upload($uploadedfile4, ['nama4' => $firebase_storage_path . $nama4]);

                unlink($localfolder . $file);
                unlink($localfolder . $file2);
                unlink($localfolder . $file3);
                unlink($localfolder . $file4);
                return redirect(route('step-4'));
            }
        // STEP 4
            public function pengajuanVerifikasi(Request $request)
            {
                $pengajuanPerumahan = $request->session()->get('pengajuanPerumahan');
                $rsp_provinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
                $provinsi = $rsp_provinsi->json();
                $rsp_kota = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$pengajuanPerumahan->provinsi_dok);
                $kota = $rsp_kota->json();
                $rsp_kecamatan = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='.$pengajuanPerumahan->kota_dok);
                $kecamatan = $rsp_kecamatan->json();
                $rsp_kelurahan = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan='.$pengajuanPerumahan->kecamatan_dok);
                $kelurahan = $rsp_kelurahan->json();
                return view('backend.pengembang.pengajuan.step-4', compact('pengajuanPerumahan', 'provinsi', 'kota', 'kecamatan', 'kelurahan'));
            }
            public function postVerifikasi(Request $request)
            {
                $firebase_storage_path = 'application/'; 
                $firebase_storage_path_images = 'images/'; 

                $rumah = app('firebase.firestore')->database()->collection('Rumah')->newDocument();
                $rumah->set([
                    'Id Pengembang' => Session::get('id'),
                    'Instansi'  =>  Session::get('instansi'),
                    'Nama Tipe Rumah' => $request->namaTipe_verif,
                    'Kamar Mandi' => $request->kamarMandi_verif,
                    'Harga' => $request->harga_verif,
                    'Teknis Atap' => $request->teknisAtap_verif,
                    'Luas Lahan' => $request->luasLahan_verif,
                    'Teknis Dinding' => $request->teknisDinding_verif,
                    'Luas Bangunan' => $request->luasBangunan_verif,
                    'Teknis Lantai' => $request->teknisLantai_verif,
                    'Kamar Tidur' => $request->kamarTidur_verif,
                    'Teknis Pondasi' => $request->teknisPondasi_verif,
                    'Nama Perumahan' => $request->namaPerumahan_verif,
                    'Provinsi' => $request->provinsi_verif,
                    'Jenis Perumahan' => $request->jenisPerumahan_verif,
                    'Nomor IMB' => $request->nomorIMB_verif,
                    'Alamat Perumahan' => $request->alamatPerumahan_verif,
                    'Nik pemilik IMB' => $request->nik_verif,
                    'Kelurahan' => $request->kelurahan_verif,
                    'Tanggal IMB' => $request->tanggalIMB_verif,
                    'Kecamatan' => $request->kecamatan_verif,
                    'Kota' => $request->kota_verif,
                    'PDF IMB' => $firebase_storage_path,
                    'Foto Siteplan' => $firebase_storage_path_images,
                ]);
                
                $pdf = $request->pdfIMB_verif;
                $siteplan = $request->siteplan_verif;

                $rumah2 = app('firebase.firestore')->database()->collection('Rumah');
                $getDataPengembang = $rumah2->where('Id Pengembang','==',Session::get('id'));
                $document = $getDataPengembang->documents();
                foreach ($document as $documents) {
                    $getData = $documents->id();
                }
                $nama = $getData;
                $localfolder = public_path('images') .'/';
                $localfolder2 = public_path('pdf') .'/';

                $extension = $pdf->getClientOriginalExtension();
                $extension2 = $siteplan->getClientOriginalExtension();

                $file      = $nama. '.' . $extension;
                $file2     = $nama. '.' . $extension2;

                $pdf->move($localfolder, $file);
                $siteplan->move($localfolder2, $file2);

                $uploadedfile = fopen($localfolder.$file, 'r');
                $uploadedfile2 = fopen($localfolder2.$file2, 'r');

                app('firebase.storage')->getBucket()->upload($uploadedfile, ['nama' => $firebase_storage_path . $nama]);
                app('firebase.storage')->getBucket()->upload($uploadedfile2, ['nama' => $firebase_storage_path . $nama]);

                unlink($localfolder . $file);
                unlink($localfolder2 . $file2);
                return redirect(route('pengembang-status'));
            }
}