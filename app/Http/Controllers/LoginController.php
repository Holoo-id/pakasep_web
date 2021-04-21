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
                Session::put('id',$ge->id());
                Session::put('asosiasi',$ge->data()['Asosiasi']);
                Session::put('email',$ge->data()['Email']);
                Session::put('email2',$ge->data()['Email Instansi']);
                Session::put('instansi',$ge->data()['Instansi']);
                Session::put('nama',$ge->data()['Nama Lengkap']);
                Session::put('noktp',$ge->data()['No KTP']);
                Session::put('pemasaran',$ge->data()['Pemasaran']);
                Session::put('tgllahir',$ge->data()['Tanggal Lahir']);
                Session::put('telepon',$ge->data()['Telepon']);
                Session::put('telepon2',$ge->data()['Telepon Instansi']);
                Session::put('website',$ge->data()['Website']);
                return redirect(route('pengembang-profil'));
            }else{
                echo"gagal";
            }
        }
    }
    public function register(){
        return view('b.register');
    }
}
