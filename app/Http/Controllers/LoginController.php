<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('b.login');
    }
    public function auth(Request $request){
        $email = $request->email;
        $password = $request->password;
        $getDeveloper = app('firebase.firestore')->database()->collection('Developer');
        $getEmail = $getDeveloper->where('Email','==',$email)->documents();
    
        foreach ($getEmail as $ge) {

            if ($getEmail && Hash::check($password, $ge->data()['Kata Sandi'])) {
                Session::put('instansi',$ge->data()['Instansi']);
                Session::put('id',$ge->id());
                return redirect('/pengembang/pengajuan-perumahan');
        }else{
            echo"gagal";
        }
        }
    
        
       
    }
}
