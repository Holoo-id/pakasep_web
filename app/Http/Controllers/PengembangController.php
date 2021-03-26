<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class PengembangController extends Controller
{
    public function dataPerumahan()
    {
        return view('backend.pengembang.data_perumahan');
    }
    public function pengajuanPerumahan()
    {
        return view('backend.pengembang.pengajuan_perumahan');
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