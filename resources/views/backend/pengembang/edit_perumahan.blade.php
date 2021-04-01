@extends('backend.template.base')
@section('content')
    <form action="" method="post" class="mh-2">
        <div class="setup-content2">
            <div class="grid grid-4col w-full mb-5">
                <img src="" id="fotoDepan" alt="Preview - Foto Tampak Depan" class="be-preview-image">
                <img src="" id="fotoDalam" alt="Preview - Foto Tampak Dalam Rumah" class="be-preview-image">
                <img src="" id="fotoJalan" alt="Preview - Foto Lingkungan" class="be-preview-image">
                <img src="" id="fotoGerbang" alt="Preview - Foto Gerbang" class="be-preview-image">
                <div class="form-column">
                    <input class="be-form" type="file" accept="image/*" onchange="document.getElementById('fotoDepan').src = window.URL.createObjectURL(this.files[0])">
                    <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Depan Rumah</label>
                </div>
                <div class="form-column">
                    <input class="be-form" type="file" accept="image/*" onchange="document.getElementById('fotoDalam').src = window.URL.createObjectURL(this.files[0])">
                    <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Dalam Rumah</label>
                </div>
                <div class="form-column">
                    <input class="be-form" type="file" accept="image/*" onchange="document.getElementById('fotoJalan').src = window.URL.createObjectURL(this.files[0])">
                    <label for="" class="be-form-label mb-2 mt-1">Foto Jalan/Lingkungan Sekitar</label>
                </div>
                <div class="form-column">
                    <input class="be-form" type="file" accept="image/*" onchange="document.getElementById('fotoGerbang').src = window.URL.createObjectURL(this.files[0])">
                    <label for="" class="be-form-label mb-2 mt-1">Foto Gerbang Perumahan</label>
                </div>
            </div>
            <hr class="mb-1">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nama Perumahan</label>
                    <input class="be-form" type="text" name="" id="" placeholder="Masukkan Nama Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Provinsi</label>
                    <select name="" id="" class="be-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jenis Perumahan</label>
                    <select name="" id="" class="be-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nomor IMB Induk (Kolektif)</label>
                    <input class="be-form" type="number" name="" id="" placeholder="Masukkan Nomor IMB Induk (Kolektif)">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Alamat Lengkap Perumahan</label>
                    <input class="be-form" type="text" name="" id="" placeholder="Masukkan Alamat Lengkap Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">NIK/NPWP Pemilik IMB</label>
                    <input class="be-form" type="number" name="" id="" placeholder="Masukkan NIK/NPWP Pemilik IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kelurahan</label>
                    <select name="" id="" class="be-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Tanggal Terbit IMB</label>
                    <input class="be-form" type="date" name="" id="" placeholder="Masukkan Tanggal Terbit IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kecamatan</label>
                    <select name="" id="" class="be-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">PDF IMB Asli (Berwarna)</label>
                    <input class="be-form" type="file" name="" id="" placeholder="Masukkan PDF IMB Asli (Berwarna)">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kabupaten/Kota</label>
                    <select name="" id="" class="be-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Foto Siteplan</label>
                    <input class="be-form" type="file" name="" id="" placeholder="Masukkan Foto Siteplan">
                </div>
            </div>
            <div class="button-bar w-half">
                <button class="prevBtn bg-purple btn-fill ftc" type="button" >KEMBALI</button>
                <input type="submit" value="AJUKAN" class="bg-purple btn-fill ftc">
                <!-- <button class="nextBtn bg-purple btn-fill ftc" type="button" >SIMPAN</button> -->
            </div>
        </div>
    </form>
@endsection