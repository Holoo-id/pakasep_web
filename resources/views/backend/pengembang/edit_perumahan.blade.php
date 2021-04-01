@extends('backend.template.base')
@section('content')
    <form action="" method="post" class="mh-2">
        <div class="setup-content">
            <div class="image-preview grid grid-4col w-full mb-4">
                <div class="form-column">
                    <img src="images/bg1.png" alt=""  title="Klik untuk mengganti gambar" onclick="">
                    <input class="dadfiwp" type="file" accept="image/*" >
                    <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Depan Rumah</label>
                </div>
                <div class="form-column">
                    <img src="images/bg1.png" alt="">
                    <input class="dadfiwp" type="file" name="" id="" placeholder="Foto Tampak Dalam Rumah">
                    <label for="" class="be-form-label mb-2 mt-1">Foto Tampak Dalam Rumah</label>
                </div>
                <div class="form-column">
                    <img src="images/bg1.png" alt="">
                    <input class="dadfiwp" type="file" name="" id="" placeholder="Foto Jalan/Lingkungan Sekitar">
                    <label for="" class="be-form-label mb-2 mt-1">Foto Jalan/Lingkungan Sekitar</label>
                </div>
                <div class="form-column">
                    <img src="images/bg1.png" alt="">
                    <input class="dadfiwp" type="file" name="" id="" placeholder="Foto Gerbang Perumahan">
                    <label for="" class="be-form-label mb-2 mt-1">Foto Gerbang Perumahan</label>
                </div>
            </div>
            <div class="grid grid-2col w-full mb-2-5">
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Nama Tipe Perumahan</label>
                    <input class="be-form" type="text" name="" id="" placeholder="Masukkan Nama Tipe Perumahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar Mandi</label>
                    <input class="be-form" type="number" name="" id="" placeholder="Masukkan Jumlah Kamar Mandi">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Harga</label>
                    <input class="be-form" type="number" name="" id="" placeholder="Masukkan Harga">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Atap</label>
                    <input class="be-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Atap">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Luas Lahan</label>
                    <input class="be-form" type="number" name="" id="" placeholder="Masukkan Luas Lahan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Dinding</label>
                    <input class="be-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Dinding">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Luas Bangunan</label>
                    <input class="be-form" type="number" name="" id="" placeholder="Masukkan Luas Bangunan">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Lantai</label>
                    <input class="be-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Lantai">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Jumlah Kamar TIdur</label>
                    <input class="be-form" type="number" name="" id="" placeholder="Masukkan Jumlah Kamar TIdur">
                </div>
                <div class="form-column">
                    <label for="" class="be-form-label mb-1 mt-2">Spesifikasi Teknis Pondasi</label>
                    <input class="be-form" type="text" name="" id="" placeholder="Masukkan Spesifikasi Teknis Pondasi">
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