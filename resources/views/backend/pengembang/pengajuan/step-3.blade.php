@extends('backend.pengembang.pengajuan_perumahan')
@section('form')
    <form action="{{ route('post-3') }}" method="post" class="setup-content" id="step-3">
        @csrf
        <div class="grid grid-4col w-full mb-5">
            <img id="fotoDepan" alt="Preview - Foto Tampak Depan" class="be-preview-image">
            <img id="fotoDalam" alt="Preview - Foto Tampak Dalam Rumah" class="be-preview-image">
            <img id="fotoJalan" alt="Preview - Foto Lingkungan" class="be-preview-image">
            <img id="fotoGerbang" alt="Preview - Foto Gerbang" class="be-preview-image">
            <div class="form-column">
                <input class="be-form" name="fotoDepanRumah" type="file" accept="image/*" onchange="document.getElementById('fotoDepan').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoDepanRumah') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Depan Rumah</label>
                <input class="be-form" type="text" name="txtFotoDepanRumah" id="" placeholder="Masukkan Nama Foto">
            </div>
            <div class="form-column">
                <input class="be-form" name="fotoDalamRumah" type="file" accept="image/*" onchange="document.getElementById('fotoDalam').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoDalamRumah') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Dalam Rumah</label>
                <input class="be-form" type="text" name="txtFotoDalamRumah" id="" placeholder="Masukkan Nama Foto">
            </div>
            <div class="form-column">
                <input class="be-form" name="fotoJalan" type="file" accept="image/*" onchange="document.getElementById('fotoJalan').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoJalan') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Jalan/Lingkungan Sekitar</label>
                <input class="be-form" type="text" name="txtFotoJalan" id="" placeholder="Masukkan Nama Foto">
            </div>
            <div class="form-column">
                <input class="be-form" name="fotoGerbangPerumahan" type="file" accept="image/*" onchange="document.getElementById('fotoGerbang').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoGerbangPerumahan') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Gerbang Perumahan</label>
                <input class="be-form" type="text" name="txtFotoGerbangPerumahan" id="" placeholder="Masukkan Nama Foto">
            </div>
        </div>
        <div class="button-bar w-75">
            <button class="prevBtn bg-purple btn-fill ftc" type="button" >KEMBALI</button>
            <button class="nextBtn bg-purple btn-fill ftc" type="submit"  formenctype="multipart/form-data" >SIMPAN</button>
        </div>
    </form>
@endsection