<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Stream\Stream;


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
    public function statusPengajuan()
    {
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
}