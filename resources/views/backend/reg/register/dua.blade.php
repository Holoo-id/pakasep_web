@extends('backend.template.temp')
@section('content')
    <h2 class="hpc-title">Lengkapi Profil!</h2>
    <p class="mv-1 hpc-subtitle c-grey-3">Masukkan detail informasi untuk melengkapi data.</p>
    <hr>
    <form action="{{ route('post-dua') }}" method="post">
        @csrf
        <div class="form-column">
            <label for="emailPengembang" class="be-form-label mb-1 mt-2">Alamat Email*</label>
            <input class="be-form" type="email" name="emailPengembang" id="emailPengembang" placeholder="Masukkan Alamat Email" value="{{ $register->emailPengembang ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('emailPengembang') }}</p>
        </div>
        <div class="form-column">
            <label for="password" class="be-form-label mb-1 mt-2">Password*</label>
            <input class="be-form" type="password" name="password" id="password" placeholder="Masukkan Password" value="{{ $register->password ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('password') }}</p>
        </div>
        <div class="form-column">
            <label for="namaPengembang" class="be-form-label mb-1 mt-2">Nama Pengembang/Bank</label>
            <input class="be-form" type="text" name="namaPengembang" id="namaPengembang" placeholder="Masukkan Perusahaan Pengembang" value="{{ $register->namaPengembang ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('namaPengembang') }}</p>
        </div>
        <div class="form-column">
            <label for="ktpPengembang" class="be-form-label mb-1 mt-2">Nomor KTP*</label>
            <input class="be-form" type="number" name="ktpPengembang" id="ktpPengembang" placeholder="Masukkan Nomor KTP" value="{{ $register->ktpPengembang ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('ktpPengembang') }}</p>
        </div>
        <div class="form-column">
            <label for="tanggalLahir" class="be-form-label mb-1 mt-2">Tanggal Lahir*</label>
            <input class="be-form" type="date" name="tanggalLahir" id="tanggalLahir" placeholder="Masukkan Tanggal Lahir" value="{{ $register->tanggalLahir ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('tanggalLahir') }}</p>
        </div>
        <div class="form-column">
            <label for="teleponPengembang" class="be-form-label mb-1 mt-2">Nomor Telepon</label>
            <input class="be-form" type="tel" name="teleponPengembang" id="teleponPengembang" placeholder="Masukkan Nomor Telepon" value="{{ $register->teleponPengembang ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('teleponPengembang') }}</p>
        </div>
        <input type="submit" value="Daftarkan" class="be-form-button mt-2">
    </form>
@endsection