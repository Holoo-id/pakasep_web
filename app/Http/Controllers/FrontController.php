<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.page.home');
    }
    public function gallery()
    {
        return view('frontend.page.gallery');
    }
    public function perumahan()
    {
        return view('frontend.page.detail');
    }
}