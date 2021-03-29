<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Stream\Stream;


class PengembangController extends Controller
{
    public function dataPerumahan()
    {
        return view('backend.pengembang.data_perumahan');
    }
    public function pengajuanPerumahan()
    {
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $provinsi = $response->json();
        
        return view('backend.pengembang.pengajuan_perumahan',compact('provinsi'));
    }
    public function profil()
    {
        return view('backend.pengembang.profil');
    }
    public function statusPengajuan()
    {
        return view('backend.pengembang.status_pengajuan');
    }
}