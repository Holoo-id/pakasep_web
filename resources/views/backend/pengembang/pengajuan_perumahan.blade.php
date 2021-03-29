@extends('backend.template.base')
@section('content')
    <!-- StepWizard -->
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel mh-2">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="circle-button active">1</a>
                <p>Data Rumah</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="circle-button inactive" disabled="disabled">2</a>
                <p>Dokumen</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="circle-button inactive" disabled="disabled">3</a>
                <p>Foto</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="circle-button inactive" disabled="disabled">4</a>
                <p>Verifikasi</p>
            </div>
        </div>
    </div>
    <form action="" method="post" class="mh-2">
        <div class="setup-content" id="step-1">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Nama Tipe Perumahan</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Nama Tipe Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Jumlah Kamar Mandi</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Jumlah Kamar Mandi">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Harga</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Harga">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Atap</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Atap">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Luas Lahan</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Luas Lahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Dinding</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Dinding">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Luas Bangunan</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Luas Bangunan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Lantai</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Lantai">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Jumlah Kamar TIdur</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Jumlah Kamar TIdur">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Pondasi</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Pondasi">
                </div>
            </div>
            <div class="button-bar w-75">
                <button class="prevBtn rounded-purple-button btn-fill ftc" type="button" >KEMBALI</button>
                <button class="nextBtn rounded-purple-button btn-fill ftc" type="button" >SIMPAN</button>
            </div>
        </div>
        <div class="setup-content" id="step-2">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Nama Perumahan</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Nama Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Provinsi</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Pilih</option>
                     
                        @foreach($provinsi as $gp)
                        @foreach($gp as $g)
                        
                        <option value="">{{$g['nama'] }}</option>
                      @endforeach
                      @endforeach
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Jenis Perumahan</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Nomor IMB Induk (Kolektif)</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Nomor IMB Induk (Kolektif)">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Alamat Lengkap Perumahan</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Alamat Lengkap Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">NIK/NPWP Pemilik IMB</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan NIK/NPWP Pemilik IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Kelurahan</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Tanggal Terbit IMB</label>
                    <input class="be-log-form" type="date" name="" id="" placeholder="Masukkan Tanggal Terbit IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Kecamatan</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">PDF IMB Asli (Berwarna)</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Masukkan PDF IMB Asli (Berwarna)">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Kabupaten/Kota</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Foto Siteplan</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Masukkan Foto Siteplan">
                </div>
            </div>
            <div class="button-bar w-75">
                <button class="prevBtn rounded-purple-button btn-fill ftc" type="button" >KEMBALI</button>
                <button class="nextBtn rounded-purple-button btn-fill ftc" type="button" >SIMPAN</button>
            </div>
        </div>
        <div class="setup-content" id="step-3">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Foto Tampak Depan Rumah</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Foto Tampak Depan Rumah">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Foto Tampak Dalam Rumah</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Foto Tampak Dalam Rumah">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Foto Jalan/Lingkungan Sekitar</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Foto Jalan/Lingkungan Sekitar">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Foto Gerbang Perumahan</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Foto Gerbang Perumahan">
                </div>
            </div>
            <div class="button-bar w-75">
                <button class="prevBtn rounded-purple-button btn-fill ftc" type="button" >KEMBALI</button>
                <button class="nextBtn rounded-purple-button btn-fill ftc" type="button" >SIMPAN</button>
            </div>
        </div>
        <div class="setup-content" id="step-4">
            <div class="grid grid-2col w-full mb-2-5">
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Nama Tipe Perumahan</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Nama Tipe Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Jumlah Kamar Mandi</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Jumlah Kamar Mandi">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Harga</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Harga">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Atap</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Atap">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Luas Lahan</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Luas Lahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Dinding</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Dinding">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Luas Bangunan</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Luas Bangunan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Lantai</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Lantai">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Jumlah Kamar TIdur</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Jumlah Kamar TIdur">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Spesifikasi Teknis Pondasi</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Pondasi">
                </div>
            </div>
            <hr class="mb-1">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Nama Perumahan</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Nama Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Provinsi</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Jenis Perumahan</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Nomor IMB Induk (Kolektif)</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan Nomor IMB Induk (Kolektif)">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Alamat Lengkap Perumahan</label>
                    <input class="be-log-form" type="text" name="" id="" placeholder="Masukkan Alamat Lengkap Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">NIK/NPWP Pemilik IMB</label>
                    <input class="be-log-form" type="number" name="" id="" placeholder="Masukkan NIK/NPWP Pemilik IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Kelurahan</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Tanggal Terbit IMB</label>
                    <input class="be-log-form" type="date" name="" id="" placeholder="Masukkan Tanggal Terbit IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Kecamatan</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">PDF IMB Asli (Berwarna)</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Masukkan PDF IMB Asli (Berwarna)">
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Kabupaten/Kota</label>
                    <select name="" id="" class="be-log-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-log-form-label mb-1 mt-2">Foto Siteplan</label>
                    <input class="be-log-form" type="file" name="" id="" placeholder="Masukkan Foto Siteplan">
                </div>
            </div>
            <div class="button-bar w-75">
                <button class="prevBtn rounded-purple-button btn-fill ftc" type="button" >KEMBALI</button>
                <input type="submit" value="AJUKAN" class="rounded-purple-button btn-fill ftc">
                <!-- <button class="nextBtn rounded-purple-button btn-fill ftc" type="button" >SIMPAN</button> -->
            </div>
        </div>
    </form>
@endsection