<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class BankController extends Controller
{
    public function index()
    {
        return view('backend.bank.main');
    }
}