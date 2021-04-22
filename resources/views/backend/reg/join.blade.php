@extends('backend.template.temp')
@section('content')
    <h2 class="hpc-title">Bergabung Bersama Kami!</h2>
    <p class="mv-1 hpc-subtitle c-grey-3">Untuk mendapatkan akses ke sistem, pilih tipe akun yang ingin anda daftarkan.</p>
    <a href="{{ route('satu') }}" class="mv-1 card-button">
        <figure>
            <img src="" alt="">
        </figure>
        <div class="cb-content">
            <h5 class="c-black">Pengembang</h5>
            <p class="c-grey-3">Akses khusus untuk pengembang perumahan</p>
        </div>
        <span class="material-icons c-green next-arrow">
            east
        </span>
    </a>
    <a href="" class="card-button">
        <figure>
            <img src="" alt="">
        </figure>
        <div class="cb-content">
            <h5 class="c-black">Bank</h5>
            <p class="c-grey-3">Akses khusus untuk bank pendukung</p>
        </div>
        <span class="material-icons c-green next-arrow">
            east
        </span>
    </a>
@endsection