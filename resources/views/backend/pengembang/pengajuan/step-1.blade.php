@extends('backend.pengembang.pengajuan_perumahan')
@section('form')
    <form action="{{ route('post-1') }}" method="post" class="setup-content" id="step-1">
        @csrf
        <div class="grid grid-2col w-full mb-5">
            <div class="form-column">
                <label for="namaTipe_rumah" class="be-form-label mb-1 mt-2">Nama Tipe Perumahan</label>
                <input class="be-form" type="text" name="namaTipe_rumah" id="namaTipe_rumah" placeholder="Masukkan Tipe Perumahan">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('namaTipe_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar Mandi</label>
                <input class="be-form" type="text" name="kamarMandi_rumah" id="kamarMandi_rumah" placeholder="Masukkan Jumlah Kamar Mandi">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('kamarMandi_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Harga</label>
                <input class="be-form" type="text" name="harga_rumah" id="harga_rumah" placeholder="Masukkan Harga">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('harga_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Atap</label>
                <input class="be-form" type="text" name="teknisAtap_rumah" id="teknisAtap_rumah" placeholder="Masukkan Spesifikasi Teknis Atap">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('teknisAtap_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Luas Lahan</label>
                <input class="be-form" type="text" name="luasLahan_rumah" id="luasLahan_rumah" placeholder="Masukkan Luas Lahan">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('luasLahan_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Dinding</label>
                <input class="be-form" type="text" name="teknisDinding_rumah" id="teknisDinding_rumah" placeholder="Masukkan Spesifikasi Teknis Dinding">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('teknisDinding_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Luas Bangunan</label>
                <input class="be-form" type="text" name="luasBangunan_rumah" id="luasBangunan_rumah" placeholder="Masukkan Luas Bangunan">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('luasBangunan_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Lantai</label>
                <input class="be-form" type="text" name="teknisLantai_rumah" id="teknisLantai_rumah" placeholder="Masukkan Spesifikasi Teknis Lantai">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('teknisLantai_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar TIdur</label>
                <input class="be-form" type="test" name="kamarTidur_rumah" id="kamarTidur_rumah" placeholder="Masukkan Jumlah Kamar TIdur">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('kamarTidur_rumah') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Pondasi</label>
                <input class="be-form" type="text" name="teknisPondasi_rumah" id="teknisPondasi_rumah" placeholder="Masukkan Spesifikasi Teknis Pondasi">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('teknisPondasi_rumah') }}</p>
            </div>
        </div>
        <div class="button-bar w-75">
            <button class="prevBtn bg-purple btn-fill ftc" type="button">KEMBALI</button>
            <!-- <button class="nextBtn bg-purple btn-fill ftc" type="button" onclick="getValue()" >SIMPAN</button> -->
            <input type="submit" value="SIMPAN" class="nextBtn bg-purple btn-fill ftc" onclick="getValue()" >
        </div>
    </form>
@endsection