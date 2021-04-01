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
                    <label for="" class="be-form-label mb-1 mt-2">Nama Tipe Perumahan</label>
                    <input class="be-form" type="text" name="namaTipe_rumah" id="namaTipe_rumah" placeholder="Masukkan Tipe Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar Mandi</label>
                    <input class="be-form" type="text" name="kamarMandi_rumah" id="kamarMandi_rumah" placeholder="Masukkan Jumlah Kamar Mandi">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Harga</label>
                    <input class="be-form" type="text" name="harga_rumah" id="harga_rumah" placeholder="Masukkan Harga">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Atap</label>
                    <input class="be-form" type="text" name="teknisAtap_rumah" id="teknisAtap_rumah" placeholder="Masukkan Spesifikasi Teknis Atap">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Luas Lahan</label>
                    <input class="be-form" type="text" name="luasLahan_rumah" id="luasLahan_rumah" placeholder="Masukkan Luas Lahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Dinding</label>
                    <input class="be-form" type="text" name="teknisDinding_rumah" id="teknisDinding_rumah" placeholder="Masukkan Spesifikasi Teknis Dinding">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Luas Bangunan</label>
                    <input class="be-form" type="text" name="luasBangunan_rumah" id="luasBangunan_rumah" placeholder="Masukkan Luas Bangunan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Lantai</label>
                    <input class="be-form" type="text" name="teknisLantai_rumah" id="teknisLantai_rumah" placeholder="Masukkan Spesifikasi Teknis Lantai">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar TIdur</label>
                    <input class="be-form" type="test" name="kamarTidur_rumah" id="kamarTidur_rumah" placeholder="Masukkan Jumlah Kamar TIdur">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Pondasi</label>
                    <input class="be-form" type="text" name="teknisPondasi_rumah" id="teknisPondasi_rumah" placeholder="Masukkan Spesifikasi Teknis Pondasi">
                </div>
            </div>
            <div class="button-bar w-75">
                <button class="prevBtn bg-purple btn-fill ftc" type="button">KEMBALI</button>
                <button class="nextBtn bg-purple btn-fill ftc" type="button" onclick="getValue()" >SIMPAN</button>
            </div>
        </div>
        <div class="setup-content" id="step-2">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nama Perumahan</label>
                    <input class="be-form" type="text" name="namaPerumahan_dok" id="namaPerumahan_dok" placeholder="Masukkan Nama Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Provinsi</label>
                    <select name="provinsi_dok" id="provinsi_dok" class="be-form" onclick="formDisProv()">
                        <option value="">Pilih</option>
                     
                        @foreach($provinsi as $gp)
                        @foreach($gp as $g)
                        
                        <option id="optionProvinsi" value="{{$g['id'] }}">{{$g['nama'] }}</option>
                      @endforeach
                      @endforeach
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jenis Perumahan</label>
                    <select name="jenisPerumahan_dok" id="jenisPerumahan_dok" class="be-form">
                        <option value="">Current</option>
                        <option value="asd">Option 1</option>
                        <option value="asdasd">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nomor IMB Induk (Kolektif)</label>
                    <input class="be-form" type="text" name="nomorIMB_dok" id="nomorIMB_dok" placeholder="Masukkan Nomor IMB Induk (Kolektif)">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Alamat Lengkap Perumahan</label>
                    <input class="be-form" type="text" name="alamatPerumahan_dok" id="alamatPerumahan_dok" placeholder="Masukkan Alamat Lengkap Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">NIK/NPWP Pemilik IMB</label>
                    <input class="be-form" type="text" name="nik_dok" id="nik_dok" placeholder="Masukkan NIK/NPWP Pemilik IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kelurahan</label>
                    <select name="kelurahan_dok" id="kelurahan_dok" class="be-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Tanggal Terbit IMB</label>
                    <input class="be-form" type="date" name="tanggalIMB_dok" id="tanggalIMB_dok" placeholder="Masukkan Tanggal Terbit IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kecamatan</label>
                    <select name="kecamatan_dok" id="kecamatan_dok" class="be-form" onclick="formDisKec()">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">PDF IMB Asli (Berwarna)</label>
                    <input class="be-form" type="file" name="pdfIMB_dok" id="pdfIMB_dok" placeholder="Masukkan PDF IMB Asli (Berwarna)">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kabupaten/Kota</label>
                    <select name="kota_dok" id="kota_dok" class="be-form" onclick="formDisKota()">
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
            <div class="button-bar w-75">
                <button class="prevBtn bg-purple btn-fill ftc" type="button" >KEMBALI</button>
                <button class="nextBtn bg-purple btn-fill ftc" type="button" onclick="getValueDokToVerif()">SIMPAN</button>
            </div>
        </div>
        <div class="setup-content" id="step-3">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Foto Tampak Depan Rumah</label>
                    <input class="be-form" type="file" name="" id="" placeholder="Foto Tampak Depan Rumah">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Foto Tampak Dalam Rumah</label>
                    <input class="be-form" type="file" name="" id="" placeholder="Foto Tampak Dalam Rumah">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Foto Jalan/Lingkungan Sekitar</label>
                    <input class="be-form" type="file" name="" id="" placeholder="Foto Jalan/Lingkungan Sekitar">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Foto Gerbang Perumahan</label>
                    <input class="be-form" type="file" name="" id="" placeholder="Foto Gerbang Perumahan">
                </div>
            </div>
            <div class="button-bar w-75">
                <button class="prevBtn bg-purple btn-fill ftc" type="button" >KEMBALI</button>
                <button class="nextBtn bg-purple btn-fill ftc" type="button" >SIMPAN</button>
            </div>
        </div>
        <div class="setup-content" id="step-4">
            <div class="grid grid-2col w-full mb-2-5">
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nama Tipe Perumahan</label>
                    <input class="be-form" type="text" name="namaTipe_verif" id="namaTipe_verif" placeholder="Masukkan Tipe Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar Mandi</label>
                    <input class="be-form" type="text" name="kamarMandi_verif" id="kamarMandi_verif" placeholder="Masukkan Jumlah Kamar Mandi">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Harga</label>
                    <input class="be-form" type="text" name="harga_verif" id="harga_verif" placeholder="Masukkan Harga">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Atap</label>
                    <input class="be-form" type="text" name="teknisAtap_verif" id="teknisAtap_verif" placeholder="Masukkan Spesifikasi Teknis Atap">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Luas Lahan</label>
                    <input class="be-form" type="text" name="luasLahan_verif" id="luasLahan_verif" placeholder="Masukkan Luas Lahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Dinding</label>
                    <input class="be-form" type="text" name="teknisDinding_verif" id="teknisDinding_verif" placeholder="Masukkan Spesifikasi Teknis Dinding">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Luas Bangunan</label>
                    <input class="be-form" type="text" name="luasBangunan_verif" id="luasBangunan_verif" placeholder="Masukkan Luas Bangunan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Lantai</label>
                    <input class="be-form" type="text" name="teknisLantai_verif" id="teknisLantai_verif" placeholder="Masukkan Spesifikasi Teknis Lantai">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar TIdur</label>
                    <input class="be-form" type="text" name="kamarTidur_verif" id="kamarTidur_verif" placeholder="Masukkan Jumlah Kamar TIdur">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Pondasi</label>
                    <input class="be-form" type="text" name="teknisPondasi_verif" id="teknikPondasi_verif" placeholder="Masukkan Spesifikasi Teknis Pondasi">
                </div>
            </div>
            <hr class="mb-1">
            <div class="grid grid-2col w-full mb-5">
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nama Perumahan</label>
                    <input class="be-form" type="text" name="namaPerumahan_verif" id="namaPerumahan_verif" placeholder="Masukkan Nama Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Provinsi</label>
                    <select name="provinsi_verif" id="provinsi_verif" class="be-form">
                        <option value="">Pilih</option>
                        
                        @foreach($provinsi as $gp)
                        @foreach($gp as $g)
                        
                        <option value="{{$g['nama'] }}">{{$g['nama'] }}</option>
                      @endforeach
                      @endforeach
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jenis Perumahan</label>
                    <select name="jenisPerumahan_verif" id="jenisPerumahan_verif" class="be-form">
                        <option value="">Current</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nomor IMB Induk (Kolektif)</label>
                    <input class="be-form" type="text" name="nomorIMB_verif" id="nomorIMB_verif" placeholder="Masukkan Nomor IMB Induk (Kolektif)">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Alamat Lengkap Perumahan</label>
                    <input class="be-form" type="text" name="alamatPerumahan_verif" id="alamatPerumahan_verif" placeholder="Masukkan Alamat Lengkap Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">NIK/NPWP Pemilik IMB</label>
                    <input class="be-form" type="text" name="nik_verif" id="nik_verif" placeholder="Masukkan NIK/NPWP Pemilik IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kelurahan</label>
                    <select name="kelurahan_verif" id="kelurahan_verif" class="be-form">
                        <option value="">Current</option>
                        <option value="asdsa">Option 1</option>
                        <option value="saddas">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Tanggal Terbit IMB</label>
                    <input class="be-form" type="date" name="tanggalIMB_verif" id="tanggalIMB_verif" placeholder="Masukkan Tanggal Terbit IMB">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kecamatan</label>
                    <select name="kecamatan_verif" id="kecamatan_verif" class="be-form">
                        <option value="">Current</option>
                        <option value="sadsad">Option 1</option>
                        <option value="sadas">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">PDF IMB Asli (Berwarna)</label>
                    <input class="be-form" type="file" name="pdfIMB_verif" id="pdfIMB_verif" placeholder="Masukkan PDF IMB Asli (Berwarna)">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Kabupaten/Kota</label>
                    <select name="kota_verif" id="kota_verif" class="be-form">
                        <option value="">Current</option>
                        <option value="asdasd">Option 1</option>
                        <option value="asdsadas">Option 2</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Foto Siteplan</label>
                    <input class="be-form" type="file" name="" id="" placeholder="Masukkan Foto Siteplan">
                </div>
            </div>
            <div class="button-bar w-75">
                <button class="prevBtn bg-purple btn-fill ftc" type="button" >KEMBALI</button>
                <input type="submit" value="AJUKAN" class="bg-purple btn-fill ftc">
                <!-- <button class="nextBtn bg-purple btn-fill ftc" type="button" >SIMPAN</button> -->
            </div>
        </div>
    </form>

    
@endsection