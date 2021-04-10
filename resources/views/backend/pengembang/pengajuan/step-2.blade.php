@extends('backend.pengembang.pengajuan_perumahan')
@section('form')
    <form action="{{ route('post-2') }}" method="post" class="setup-content" id="step-2">
        @csrf
        <div class="grid grid-2col w-full mb-5">
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Nama Perumahan</label>
                <input class="be-form" type="text" name="namaPerumahan_dok" id="namaPerumahan_dok" placeholder="Masukkan Nama Perumahan">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('namaPerumahan_dok') }}</p>
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
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('provinsi_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Jenis Perumahan</label>
                <select name="jenisPerumahan_dok" id="jenisPerumahan_dok" class="be-form">
                    <option value="">Current</option>
                    <option value="asd">Option 1</option>
                    <option value="asdasd">Option 2</option>
                </select>
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('jenisPerumahan_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Nomor IMB Induk (Kolektif)</label>
                <input class="be-form" type="text" name="nomorIMB_dok" id="nomorIMB_dok" placeholder="Masukkan Nomor IMB Induk (Kolektif)">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('nomorIMB_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Alamat Lengkap Perumahan</label>
                <input class="be-form" type="text" name="alamatPerumahan_dok" id="alamatPerumahan_dok" placeholder="Masukkan Alamat Lengkap Perumahan">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('alamatPerumahan_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">NIK/NPWP Pemilik IMB</label>
                <input class="be-form" type="text" name="nik_dok" id="nik_dok" placeholder="Masukkan NIK/NPWP Pemilik IMB">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('nik_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Kelurahan</label>
                <select name="kelurahan_dok" id="kelurahan_dok" class="be-form">
                    <option value="">Current</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('kelurahan_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Tanggal Terbit IMB</label>
                <input class="be-form" type="date" name="tanggalIMB_dok" id="tanggalIMB_dok" placeholder="Masukkan Tanggal Terbit IMB">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('tanggalIMB_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Kecamatan</label>
                <select name="kecamatan_dok" id="kecamatan_dok" class="be-form" onclick="formDisKec()">
                    <option value="">Current</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('kecamatan_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">PDF IMB Asli (Berwarna)</label>
                <input class="be-form" type="file" name="pdfIMB_dok" id="pdfIMB_dok" placeholder="Masukkan PDF IMB Asli (Berwarna)">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('pdfIMB_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Kabupaten/Kota</label>
                <select name="kota_dok" id="kota_dok" class="be-form" onclick="formDisKota()">
                <option selected value=""></option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('kota_dok') }}</p>
            </div>
            <div class="form-column">
                <label for="" class="be-form-label mb-1 mt-2">Foto Siteplan</label>
                <input class="be-form" type="file" name="siteplan_dok" id="siteplan_dok" placeholder="Masukkan Foto Siteplan">
                <p class="error-text pv-1" style="color: #FF5756;  font-size: 0.85em;line-height: 1.5em;">{{ $errors->first('siteplan_dok') }}</p>
            </div>
        </div>
        <div class="button-bar w-75">
            <button class="prevBtn bg-purple btn-fill ftc" type="button" >KEMBALI</button>
            <!-- <button class="nextBtn bg-purple btn-fill ftc" id="btn" type="button" onclick="getValueDokToVerif()">SIMPAN</button> -->
            <input type="submit" value="SIMPAN" id="btn" class="nextBtn bg-purple btn-fill ftc" onclick="getValueDokToVerif()" >
        </div>
    </form>
@endsection