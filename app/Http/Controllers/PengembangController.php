<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PengajuanPerumahan;
use Carbon\Carbon;
use GuzzleHttp\Stream\Stream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class PengembangController extends Controller
{
    public function editPerumahan()
    {
        return view('backend.pengembang.edit_perumahan');
    }
   
    public function dataPerumahan()
    {
        $rumah2 = app('firebase.firestore')->database()->collection('Rumah');
                $getDataPengembang = $rumah2->where('Id Pengembang','==',Session::get('id'));
                $document = $getDataPengembang->documents();
                foreach ($document as $documents) {
                    $getData = $documents->id();
                }

        // $getData = app('firebase.firestore')->database()->collection('Rumah');
        $rumah = app('firebase.firestore')->database()->collection('Rumah')->where('Id Pengembang','==',Session::get('id'))->documents();
        foreach ($rumah as $r) {
            $devId = $r->id();
            $developer = app('firebase.firestore')->database()->collection('Developer')->where($devId,'==',Session::get('id'))->documents();
        }
        // $devId = app('firebase.firestore')->database()->collection('Developer')->id();
        // $rumah = $getWhere->documents();
        return view('backend.pengembang.data_perumahan',compact('rumah', 'developer'));
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
        $getData = app('firebase.firestore')->database()->collection('Rumah');
        $getWhere = $getData->where('Id Pengembang','==',Session::get('id'));
        $rumah = $getWhere->documents()->rows();
        
    

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
                    'tersedia_rumah' => 'required|numeric',
                    // 'tenor' => 'required|numeric',
                    // 'bunga' => 'required|numeric',
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
                // Storage
                    $storage = app('firebase.storage');
                    $firebase_storage_path = 'application/';  
                    $firebase_storage_path_images = 'images/units';  
                    $imageFolder = public_path('images/') .'rumah/';  
                    $pdfFolder = public_path('pdf/') .'imb/';  
                // Siteplan
                    if ($request->has('siteplan_dok')) {
                        $siteplanInput = $request->file('siteplan_dok');
                        $siteplanName = 'Siteplan - ';
                        $siteplanExt = $siteplanInput->getClientOriginalExtension();  
                        $siteplan = $siteplanName.Carbon::parse()->format('YmdHis').'.'.$siteplanExt;
                        if ($siteplanInput->move($imageFolder, $siteplan)) {  
                            $uploadedfile = fopen($imageFolder.$siteplan, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['siteplanName' => $firebase_storage_path_images . $siteplanName]);
                            unlink($imageFolder . $siteplan);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }
                    // IMB PDF
                    if ($request->has('pdfIMB_dok')) {
                        $imbPdfInput = $request->file('pdfIMB_dok');
                        $pdfImbName = 'IMB - ';
                        $pdfImbExt = $imbPdfInput->getClientOriginalExtension();  
                        $pdfImb = $pdfImbName.Carbon::parse()->format('YmdHis').'.'.$pdfImbExt;
                        if ($imbPdfInput->move($pdfFolder, $pdfImb)) {  
                            $uploadedfile = fopen($pdfFolder.$pdfImb, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['pdfImbName' => $firebase_storage_path . $pdfImbName]);
                            unlink($pdfFolder . $pdfImb);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }

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
                    // 'pdfIMB_dok' => 'required',
                    'kota_dok' => 'required',
                    // 'siteplan_dok' => 'required',
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
                // Storage
                    $storage = app('firebase.storage');
                    $firebase_storage_path = 'application/';  
                    $firebase_storage_path_images = 'images/units';  
                    $imageFolder = public_path('images/') .'rumah/';  
                    $pdfFolder = public_path('pdf/') .'imb/';  
                // Siteplan
                    if ($request->has('siteplan_dok')) {
                        $siteplanInput = $request->file('siteplan_dok');
                        $siteplanName = 'Siteplan - ';
                        $siteplanExt = $siteplanInput->getClientOriginalExtension();  
                        $siteplan = $siteplanName.Carbon::parse()->format('YmdHis').'.'.$siteplanExt;
                        if ($siteplanInput->move($imageFolder, $siteplan)) {  
                            $uploadedfile = fopen($imageFolder.$siteplan, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['siteplanName' => $firebase_storage_path_images . $siteplanName]);
                            unlink($imageFolder . $siteplan);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }
                // Foto Depan
                    if ($request->has('fotoDepanRumah')) {
                        $depanInput = $request->file('fotoDepanRumah');
                        $depanName = 'Depan - ';
                        $depanExt = $depanInput->getClientOriginalExtension();  
                        $depan = $depanName.Carbon::parse()->format('YmdHis').'.'.$depanExt;
                        if ($depanInput->move($imageFolder, $depan)) {  
                            $uploadedfile = fopen($imageFolder.$depan, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['depanName' => $firebase_storage_path_images . $depanName]);
                            unlink($imageFolder . $depan);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }
                // Foto Dalam
                    if ($request->has('fotoDalamRumah')) {
                        $dalamInput = $request->file('fotoDalamRumah');
                        $dalamName = 'Dalam - ';
                        $dalamExt = $dalamInput->getClientOriginalExtension();  
                        $dalam = $dalamName.Carbon::parse()->format('YmdHis').'.'.$dalamExt;
                        if ($dalamInput->move($imageFolder, $dalam)) {  
                            $uploadedfile = fopen($imageFolder.$dalam, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['dalamName' => $firebase_storage_path_images . $dalamName]);
                            unlink($imageFolder . $dalam);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }
                // Foto Jalan
                    if ($request->has('fotoJalan')) {
                        $jalanInput = $request->file('fotoJalan');
                        $jalanName = 'Jalan - ';
                        $jalanExt = $jalanInput->getClientOriginalExtension();  
                        $jalan = $jalanName.Carbon::parse()->format('YmdHis').'.'.$jalanExt;
                        if ($jalanInput->move($imageFolder, $jalan)) {  
                            $uploadedfile = fopen($imageFolder.$jalan, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['jalanName' => $firebase_storage_path_images . $jalanName]);
                            unlink($imageFolder . $jalan);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }
                // Foto Gerbang
                    if ($request->has('fotoGerbangPerumahan')) {
                        $gerbangInput = $request->file('fotoGerbangPerumahan');
                        $gerbangName = 'Gerbang - ';
                        $gerbangExt = $gerbangInput->getClientOriginalExtension();  
                        $gerbang = $gerbangName.Carbon::parse()->format('YmdHis').'.'.$gerbangExt;
                        if ($gerbangInput->move($imageFolder, $gerbang)) {  
                            $uploadedfile = fopen($imageFolder.$gerbang, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['gerbangName' => $firebase_storage_path_images . $gerbangName]);
                            unlink($imageFolder . $gerbang);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }
                // IMB PDF
                    if ($request->has('pdfIMB_dok')) {
                        $imbPdfInput = $request->file('pdfIMB_dok');
                        $pdfImbName = 'IMB - ';
                        $pdfImbExt = $imbPdfInput->getClientOriginalExtension();  
                        $pdfImb = $pdfImbName.Carbon::parse()->format('YmdHis').'.'.$pdfImbExt;
                        if ($imbPdfInput->move($pdfFolder, $pdfImb)) {  
                            $uploadedfile = fopen($pdfFolder.$pdfImb, 'r');  
                            $storage->getBucket('rumah-7fp8g')->upload($uploadedfile, ['pdfImbName' => $firebase_storage_path . $pdfImbName]);
                            unlink($pdfFolder . $pdfImb);  
                            echo 'success';  
                        } else {  
                            echo 'error';  
                        }
                    }

                $rumah = app('firebase.firestore')->database()->collection('Rumah')->newDocument();
                $rumah->set([
                    'Id Pengembang' => Session::get('id'),
                    'Tanggal'  =>  date('Y-m-d H:i:s'),
                    // 'Instansi'  =>  Session::get('instansi'),

                    'Nama Tipe Rumah' => $request->namaTipe_verif,
                    'Kamar Mandi' => $request->kamarMandi_verif,
                    'Harga' => $request->harga_verif,
                    'Stok' => $request->tersedia_verif,
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
                    
                    'PDF IMB' => $pdfImb ?? '',
                    'Foto Siteplan' => $siteplan ?? '',
                    'Foto Depan Rumah' => $depan ?? '',
                    'Foto Dalam Rumah' => $dalam ?? '',
                    'Foto Jalan' => $jalan ?? '',
                    'Foto Gerbang Perumahan' => $gerbang ?? ''
                ]);

                return redirect(route('pengembang-status'));
            }
            
}