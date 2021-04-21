@extends('backend.pengembang.pengajuan_perumahan')
@section('form')
    <form action="{{ route('post-4') }}" method="post" enctype="multipart/form-data" class="setup-content w-full" id="step-4">
    @csrf
        <div class="grid grid-2col w-full mb-2-5">
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Nama Tipe Perumahan</label>
                <input class="be-form" type="text" name="namaTipe_verif" id="namaTipe_verif" placeholder="Masukkan Tipe Perumahan" value="{{ $pengajuanPerumahan->namaTipe_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Harga</label>
                <input class="be-form" type="text" name="harga_verif" id="harga_verif" placeholder="Masukkan Harga" value="{{ $pengajuanPerumahan->harga_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Atap</label>
                <input class="be-form" type="text" name="teknisAtap_verif" id="teknisAtap_verif" placeholder="Masukkan Spesifikasi Teknis Atap" value="{{ $pengajuanPerumahan->teknisAtap_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Unit Tersedia</label>
                <input class="be-form" type="text" name="tersedia_verif" id="tersedia_verif" placeholder="Masukkan Harga" value="{{ $pengajuanPerumahan->tersedia_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Dinding</label>
                <input class="be-form" type="text" name="teknisDinding_verif" id="teknisDinding_verif" placeholder="Masukkan Spesifikasi Teknis Dinding" value="{{ $pengajuanPerumahan->teknisDinding_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Luas Lahan</label>
                <input class="be-form" type="text" name="luasLahan_verif" id="luasLahan_verif" placeholder="Masukkan Luas Lahan" value="{{ $pengajuanPerumahan->luasLahan_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Lantai</label>
                <input class="be-form" type="text" name="teknisLantai_verif" id="teknisLantai_verif" placeholder="Masukkan Spesifikasi Teknis Lantai" value="{{ $pengajuanPerumahan->teknisLantai_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Luas Bangunan</label>
                <input class="be-form" type="text" name="luasBangunan_verif" id="luasBangunan_verif" placeholder="Masukkan Luas Bangunan" value="{{ $pengajuanPerumahan->luasBangunan_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Pondasi</label>
                <input class="be-form" type="text" name="teknisPondasi_verif" id="teknikPondasi_verif" placeholder="Masukkan Spesifikasi Teknis Pondasi" value="{{ $pengajuanPerumahan->teknisPondasi_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar TIdur</label>
                <input class="be-form" type="text" name="kamarTidur_verif" id="kamarTidur_verif" placeholder="Masukkan Jumlah Kamar TIdur" value="{{ $pengajuanPerumahan->kamarTidur_rumah }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar Mandi</label>
                <input class="be-form" type="text" name="kamarMandi_verif" id="kamarMandi_verif" placeholder="Masukkan Jumlah Kamar Mandi" value="{{ $pengajuanPerumahan->kamarMandi_rumah }}" readonly="readonly">
            </div>
        </div>
        <hr class="mb-1">
        <div class="grid grid-2col w-full mb-5">
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Nama Perumahan</label>
                <input class="be-form" type="text" name="namaPerumahan_verif" id="namaPerumahan_verif" placeholder="Masukkan Nama Perumahan" value="{{ $pengajuanPerumahan->namaPerumahan_dok }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Jenis Perumahan</label>
                <input class="be-form" type="text" name="jenisPerumahan_verif" id="jenisPerumahan_verif" placeholder="Masukkan Nama Perumahan" value="{{ $pengajuanPerumahan->jenisPerumahan_dok }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Alamat Lengkap Perumahan</label>
                <input class="be-form" type="text" name="alamatPerumahan_verif" id="alamatPerumahan_verif" placeholder="Masukkan Alamat Lengkap Perumahan" value="{{ $pengajuanPerumahan->alamatPerumahan_dok }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Nomor IMB Induk (Kolektif)</label>
                <input class="be-form" type="text" name="nomorIMB_verif" id="nomorIMB_verif" placeholder="Masukkan Nomor IMB Induk (Kolektif)" value="{{ $pengajuanPerumahan->nomorIMB_dok }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">NIK/NPWP Pemilik IMB</label>
                <input class="be-form" type="text" name="nik_verif" id="nik_verif" placeholder="Masukkan NIK/NPWP Pemilik IMB" value="{{ $pengajuanPerumahan->nik_dok }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Tanggal Terbit IMB</label>
                <input class="be-form" type="date" name="tanggalIMB_verif" id="tanggalIMB_verif" placeholder="Masukkan Tanggal Terbit IMB" value="{{ $pengajuanPerumahan->tanggalIMB_dok }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Provinsi</label>
                @foreach($provinsi as $prov)
                    @foreach($prov as $p)
                        @if($p['id'] == $pengajuanPerumahan->provinsi_dok)
                            <input class="be-form" type="text" name="provinsi_verif" id="provinsi_verif" value="{{ $p['nama'] }}" placeholder="Masukkan Nama Provinsi" readonly="readonly">
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Kota/Kabupaten</label>
                @foreach($kota as $kta)
                    @foreach($kta as $kt)
                        @if($kt['id'] == $pengajuanPerumahan->kota_dok)
                            <input class="be-form" type="text" name="kota_verif" id="kota_verif" placeholder="Masukkan Nama Kota/Kabupaten" value="{{ $kt['nama'] }}" readonly="readonly">
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Kecamatan</label>
                @foreach($kecamatan as $kcmtn)
                    @foreach($kcmtn as $kc)
                        @if($kc['id'] == $pengajuanPerumahan->kecamatan_dok)
                            <input class="be-form" type="text" name="kecamatan_verif" id="kecamatan_verif" placeholder="Masukkan Nama Kecamatan" value="{{ $kc['nama'] }}" readonly="readonly">
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Kelurahan</label>
                @foreach($kelurahan as $klrhn)
                    @foreach($klrhn as $kl)
                        @if($kl['id'] == $pengajuanPerumahan->kelurahan_dok)
                            <input class="be-form" type="text" name="kelurahan_verif" id="kelurahan_verif" placeholder="Masukkan Kelurahan" value="{{ $kl['nama'] }}" readonly="readonly">
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">PDF IMB Asli (Berwarna)</label>
                <input class="be-form" type="file" name="pdfIMB_verif" id="pdfIMB_verif" accept="application/pdf" placeholder="Masukkan PDF IMB Asli (Berwarna)" value="{{ $pengajuanPerumahan->pdfIMB_dok }}" readonly="readonly">
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Foto Siteplan</label>
                <input class="be-form" type="file" name="siteplan_verif" id="siteplan_verif" accept="image/*" placeholder="Masukkan Foto Siteplan" value="{{ $pengajuanPerumahan->siteplan_dok }}" readonly="readonly">
            </div>
        </div>
        
        <hr class="mb-1">
        <div class="grid grid-4col w-full mb-5">
            <img id="fotoDepan" alt="Preview - Foto Tampak Depan" class="be-preview-image">
            <img id="fotoDalam" alt="Preview - Foto Tampak Dalam Rumah" class="be-preview-image">
            <img id="fotoJalan" alt="Preview - Foto Lingkungan" class="be-preview-image">
            <img id="fotoGerbang" alt="Preview - Foto Gerbang" class="be-preview-image">
            <div class="form-column">
                <input class="be-form" name="fotoDepanRumah" type="file" accept="image/*" onchange="document.getElementById('fotoDepan').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoDepanRumah') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Depan Rumah</label>
            </div>
            <div class="form-column">
                <input class="be-form" name="fotoDalamRumah" type="file" accept="image/*" onchange="document.getElementById('fotoDalam').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoDalamRumah') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Dalam Rumah</label>
            </div>
            <div class="form-column">
                <input class="be-form" name="fotoJalan" type="file" accept="image/*" onchange="document.getElementById('fotoJalan').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoJalan') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Jalan/Lingkungan Sekitar</label>
            </div>
            <div class="form-column">
                <input class="be-form" name="fotoGerbangPerumahan" type="file" accept="image/*" onchange="document.getElementById('fotoGerbang').src = window.URL.createObjectURL(this.files[0])">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('fotoGerbangPerumahan') }}</p>
                <label for="" class="be-form-label mb-2 mt-1">Foto Gerbang Perumahan</label>
            </div>
        </div>
        <div class="button-bar w-full">
            <button class="prevBtn bg-purple btn-fill ftc" type="button" >KEMBALI</button>
            <input type="submit" value="AJUKAN" class="bg-purple btn-fill ftc">
            <!-- <button class="nextBtn bg-purple btn-fill ftc" type="button" >SIMPAN</button> -->
        </div>
    </form>
@endsection