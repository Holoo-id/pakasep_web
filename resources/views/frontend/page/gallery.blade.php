@extends('frontend.component.base')
@section('content')
    <h1 class="app-tagline1 mv-1">Galeri Perumahan</h1>
    <div class="centered">
        <div class="w-75">
            <div class="grid grid-4col centered mb-1">
                <input type="search" name="provinsi" placeholder="Provinsi" id="">
                <input type="search" name="kota" placeholder="Kota" id="">
                <input type="search" name="kecamatan" placeholder="Kecamatan" id="">
                <input type="search" name="asosiasi" placeholder="Asosiasi" id="">
            </div>
        </div>
    </div>
    <div class="centered">
        <div class="filter-dropdown w-75">
            <select name="filter" id="" class="filter w-full">
                <option value="1">Terbaru</option>
                <option value="1">Termurah</option>
                <option value="1">Terbanyak</option>
            </select>
        </div>
    </div>
    <div class="colored-card-outline w-full centered mt-2 mb-3">
        <div class="colored-card-wrap ftc">
            <div class="be-colored-card-1">
                <h4 class="colored-card-title">PERUMAHAN TERDAFTAR</h4>
                <p class="number-data">10</p>
            </div>
            <div class="be-colored-card-2">
                <h4 class="colored-card-title">PENGAJUAN MASUK</h4>
                <p class="number-data">10</p>
            </div>
            <div class="be-colored-card-3">
                <h4 class="colored-card-title">PENGAJUAN BERHASIL</h4>
                <p class="number-data">10</p>
            </div>
            <div class="be-colored-card-4">
                <h4 class="colored-card-title">PENGAJUAN DITOLAK</h4>
                <p class="number-data">10</p>
            </div>
        </div>
    </div>
    <div class="gallery-grid-wrap">
        <div class="unit-card">
            <figure class="units-preview-wrap">
                <img class="unit-preview-img" src="images/bg1.png" alt="">
            </figure>
            <div class="unit-data-wrap">
                <h3 class="post-title mb-1">Perumahan Griya Caraka Indah</h3>
                <p class="desc-address mb-2">Jln. Gegerkalong Tonggoh Raya No.6, Gegerkalong, Kec. Sukasari, Kota Bandung Jawa Barat 40153</p>
                <div class="unit-data-grid mb-2">
                    <div class="unit-data-item">
                        <span class="material-icons c-primary unit-data-item-icon">
                            article
                        </span>
                        <div class="unit-data-item-text">
                            <p>30X60</p>
                        </div>
                    </div>
                    <div class="unit-data-item">
                        <span class="material-icons c-primary unit-data-item-icon">
                            article
                        </span>
                        <div class="unit-data-item-text">
                            <p>2 kt</p>
                        </div>
                    </div>
                    <div class="unit-data-item">
                        <span class="material-icons c-primary unit-data-item-icon">
                            article
                        </span>
                        <div class="unit-data-item-text">
                            <p>1 km</p>
                        </div>
                    </div>
                </div>
                <p class="desc-address2">Cimalaka, Kab. Sumedang, Jawa Barat<br>
                    <div class="desc-address3 mb-1">PT TRI KARYA LINGGA (ASPRUMNAS)</div>
                </p>
                <a href="" class="btn-fill bg-purple ftc">Lihat Detail Lokasi</a>
            </div>
        </div>
    </div>
@endsection