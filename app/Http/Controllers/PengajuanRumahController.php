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
}
