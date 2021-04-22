<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Request $request){
        $request->session()->forget('register');
        return view('backend.reg.login');
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
    public function joinUs(){
        return view('backend.reg.join');
    }
    // REGISTER WAS HERE
        // STEP 1
            public function registerInformasiPerusahaan(Request $request)
            {
                $register = $request->session()->get('register');
                $developer = [
                    'Bumi Indah Properti',
                    'Garden Group Property',
                    'PT. Aldila Cipta Sanjaya',
                    'PT. BABAKAN LAYUNG SEJAHTERA',
                    'PT. BANGKIT BERSAMA SUKSES ABADI',
                    'PT. BANGUN MULYA PRATAMA',
                    'PT. BATAS NUSA PROPERTI',
                    'PT. BERKAH ADAM JASA ABADI',
                    'PT. Bintang Koin Pratama',
                    'PT. Buana Agung Properti',
                    'PT. BOKOR MAS ALMABRUR',
                    'PT. CAKRABUANA PRIMA PERKASA',
                    'PT. CAKRABUANA TRIJAYA PERKASA',
                    'PT. Damar Maruki Pratama',
                    'PT. DHARMA BAKTI LODAYA',
                    'PT. Doboku Ligar',
                    'PT. EKAHASTA SARANA GRAHA',
                    'PT. GLOBAL NETWORK INFINITY',
                    'PT. INDAH KARYA IDAMAN',
                    'PT. JALADHARA MRECUKUNDHA',
                    'PT. KARYA UTAMA KURNIA ABADI',
                    'PT. MARGINA JAYA PRATAMA',
                    'PT. MERCUSUAR RAYA PROPERTI',
                    'PT. MULYATAMA REGRAFIKA SEJAHTERA',
                    'PT. PARAMARTA BIRRU PRATAMA',
                    'PT. Peluang Gemilang Kencana',
                    'PT. RANDU ALAS',
                    'PT. SARIKARYA MUKTIWIBAWA',
                    'PT. TASIM SINERGY UTAMA',
                    'PT. Usaha Rama Budi Sejahtera',
                    'PT. WAN ARTHA NATA',
                    'Tulus Asih Group',
                ];
                return view('backend.reg.register.satu',compact('register', 'developer'));
            }
            public function postInformasiPerusahaan(Request $request)
            {
                $validasi = $request->validate([
                    'asosiasi' => 'required',
                    'emailPerusahaan' => '|email',
                    'instansi' => 'required',
                    'pemasaran' => '',
                    'teleponPerusahaan' => '|numeric',
                    'website' => '|url',
                ]);
                if(empty($request->session()->get('register'))){
                    $register = new Register();
                    $register->fill($validasi);
                    $request->session()->put('register', $register);
                }else{
                    $register = $request->session()->get('register');
                    $register->fill($validasi);
                    $request->session()->put('register', $register);
                }
                return redirect(route('dua'));
            }
        // STEP 2
            public function registerInformasiPersonal(Request $request)
            {
                $register = $request->session()->get('register');
                return view('backend.reg.register.dua',compact('register'));
            }
            public function postInformasiPersonal(Request $request)
            {
                $register = $request->session()->get('register');
                $validasi = $request->validate([
                    'emailPengembang' => 'required|email',
                    'password' => 'required|min:6',
                    'namaPengembang' => 'required',
                    'ktpPengembang' => 'required|digits:16',
                    'tanggalLahir' => 'required|date',
                    'teleponPengembang' => 'required|numeric',
                ]);
                $developer = app('firebase.firestore')->database()->collection('Developer')->newDocument();
                $developer->set([
                    'Asosiasi' => $register->asosiasi,
                    'Email' => $request->emailPengembang ?? '',
                    'Email Instansi' => $register->emailPerusahaan ?? '',
                    'Instansi' => $register->instansi,
                    'Kata Sandi' => $request->password,
                    'Nama Lengkap' => $request->namaPengembang,
                    'No KTP' => $request->ktpPengembang,
                    'Pemasaran' => $register->pemasaran ?? '',
                    'Tanggal Lahir' => $request->tanggalLahir,
                    'Telepon' => $request->teleponPengembang,
                    'Telepon Instansi' => $register->teleponPerusahaan ?? '',
                    'Website' => $register->website ?? '',

                    'Dibuat Pada' => date('Y-m-d H:i:s'),
                ]);
                return redirect(route('log-login'));
            }

    // public function register(){
    //     return view('backend.reg.register.satu');
    // }
}
