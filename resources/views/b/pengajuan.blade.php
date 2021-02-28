@extends('b.component.template')
@section('content')
    
    <div class="notif-card bg-purple">
        <ol class="notif-list ftc">
            <li>Pengembang wajib mengisi semua data yang dibutuhkan.</li>
            <li>Data yang diinput ke dalam database akan muncul di aplikasi <b>PAKASEP</b>.</li>
        </ol>
        <div class="bottom-right-text">Catatan</div>
    </div>
    <div class="table-intro-dashboard mb-2-5">
        <h2>Data Pengajuan</h2>
        <div class="button-bar">
            <button class="dt-g-btn">
                <span class="material-icons">
                    settings
                </span>
            <a href="#" class="btn btn-secondary dt-g-btn mh-1-5">Tambah Data</a>
            <a href="/admin/pengajuan/pdfpengajuan" class="btn btn-primary">Cetak PDF
                <span class="material-icons">
                    file_upload
                </span>
            </a>
        </div>
    </div>
    @endsection