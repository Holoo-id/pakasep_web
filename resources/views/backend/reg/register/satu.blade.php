@extends('backend.template.temp')
@section('content')
    <h2 class="hpc-title">Daftar Akun Pengembang</h2>
    <p class="mv-1 hpc-subtitle c-grey-3">Untuk mendapatkan akses ke sistem, diperlukan pengisian data untuk login.</p>
    <hr>
    <form action="{{ route('post-satu') }}" method="post">
        @csrf
        <div class="form-column">
            <label for="asosiasi" class="be-form-label mb-1 mt-2">Asosiasi*</label>
            <input class="be-form" type="text" name="asosiasi" id="asosiasi" placeholder="Masukkan Nama Asosiasi" value="{{ $register->asosiasi ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('asosiasi') }}</p>
        </div>
        <div class="form-column">
            <label for="emailPerusahaan" class="be-form-label mb-1 mt-2">Alamat Email Instansi</label>
            <input class="be-form" type="email" name="emailPerusahaan" id="emailPerusahaan" placeholder="Masukkan Alamat Email" value="{{ $register->emailPerusahaan ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('emailPerusahaan') }}</p>
        </div>
        <div class="form-column">
            <label for="instansi" class="be-form-label mb-1 mt-2">Pengembang*</label>
            <select name="instansi" id="instansi" class="be-form">
                <option value="">None</option>
                @foreach($developer as $dev)
                        <option value="{{ $dev }}" selected>{{ $dev }}</option>
                        <option value="{{ $dev }}">{{ $dev }}</option>
                @endforeach
            </select>
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('instansi') }}</p>
        </div>
        <div class="form-column">
            <label for="pemasaran" class="be-form-label mb-1 mt-2">Alamat Kantor Pemasaran</label>
            <input class="be-form" type="text" name="pemasaran" id="pemasaran" placeholder="Masukkan Alamat Kantor Pemasaran" value="{{ $register->pemasaran ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('pemasaran') }}</p>
        </div>
        <div class="form-column">
            <label for="teleponPerusahaan" class="be-form-label mb-1 mt-2">Nomor Telepon Instansi</label>
            <input class="be-form" type="tel" name="teleponPerusahaan" id="teleponPerusahaan" placeholder="Masukkan Nomor Telepon" value="{{ $register->teleponPerusahaan ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('teleponPerusahaan') }}</p>
        </div>
        <div class="form-column">
            <label for="website" class="be-form-label mb-1 mt-2">Website</label>
            <input class="be-form" type="url" name="website" id="website" placeholder="Masukkan Alamat Website" value="{{ $register->website ?? ''}}">
            <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('website') }}</p>
        </div>
        <!-- <div class="be-checkbox mt-1 mb-2">
            <input type="checkbox" name="" id="agree" class="be-form">
            <label for="agree" class="be-form-label"><span>Setuju dan Daftarkan</span></label>
        </div> -->
        <input type="submit" value="Simpan & Lanjutkan" class="be-form-button">
    </form>
@endsection