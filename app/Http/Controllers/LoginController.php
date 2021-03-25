<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;

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
        if($getEmail == null){
            echo"gagal";
        }else{
         echo"berhasil";
        }
        foreach ($getEmail as $ge) {

            if ($getEmail && Hash::check($password, $ge->data()['Kata Sandi'])) {
            echo"Berhasil";
        }else{
            echo"Gagal";
        }
        }
    
        
       
    }
}
