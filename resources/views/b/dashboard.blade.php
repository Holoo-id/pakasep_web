@extends('b.component.template')
@section('content')
    <div class="colored-card-wrap ftc">
        <div class="be-colored-card">
            
            <h4 class="colored-card-title">LOKASI PERUMAHAN TERDAFTAR</h4>
            <p class="number-data">10 
                <span>Lokasi</span>
            </p>
        </div>
        <div class="be-colored-card">
            <h4 class="colored-card-title">TOTAL RUMAH TERDAFTAR</h4>
            <p class="number-data">{{ $dataRumah++ }}
                <span>Lokasi</span>
            </p>
        </div>
        <div class="be-colored-card">
            <h4 class="colored-card-title">LOKASI PERUMAHAN SEDANG PROSES</h4>
            <p class="number-data">10 
                <span>Lokasi</span>
            </p>
        </div>
        <div class="be-colored-card">
            <h4 class="colored-card-title">RUMAH SEDANG PROSES</h4>
            <p class="number-data">10 
                <span>Lokasi</span>
            </p>
        </div>
    </div>
    <div class="notif-card bg-purple">
        <ol class="notif-list ftc">
            <li>Pengembang wajib mengisi semua data yang dibutuhkan.</li>
            <li>Data yang diinput ke dalam database akan muncul di aplikasi <b>PAKASEP</b>.</li>
        </ol>
        <div class="bottom-right-text">Catatan</div>
    </div>
    <div class="table-intro-dashboard mb-2-5">
        <h2>Data Pengajuan Perumahan</h2>
        <div class="button-bar">
            <button class="dt-g-btn">
                <span class="material-icons">
                    settings
                </span>
            <a href="/post" class="btn btn-secondary dt-g-btn mh-1-5">Tambah Data</a>
            <button class="dt-g-btn">Export
                <span class="material-icons">
                    file_upload
                </span>
            </button>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th>Asosiasi</th>
                <th>Aksi</th>

            </tr>
        </thead>
       
        <tbody>
            <tr>
                <td>Pengajuan belum ditemukan</td>
                <td>Pengajuan belum ditemukan</td>
                <td>Pengajuan belum ditemukan</td>
                <td>Pengajuan belum ditemukan</td>
                <td>Pengajuan belum ditemukan</td>
                <td>Pengajuan belum ditemukan</td>
                <td><a href="#" class="btn btn-success">Edit</a></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th>Asosiasi</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
@endsection