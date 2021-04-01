@extends('frontend.component.base')
@section('content')
    <div class="centered">
        <h1 class="app-tagline1 w-75 mt-1">PERUMAHAN GRIYA CARAKA INDAH</h1>
    </div>
    <h2 class="house-subtitle mb-1">Cimalaka, Kab. Sumedang Jawa Barat</h2>
    <div class="grid grid-2col ph-2">
        <div class="main-image w-full">
            <img src="images/bg1.png" class="w-full" alt="" srcset="">
        </div>
        <div class="other-image grid grid-2col">
            <img src="images/bg1.png" class="w-full" alt="" srcset="">
            <img src="images/bg1.png" class="w-full" alt="" srcset="">
            <img src="images/bg1.png" class="w-full" alt="" srcset="">
            <img src="images/bg1.png" class="w-full" alt="" srcset="">
        </div>
    </div>
    <div class="grid grid-2-1col ph-2 mb-4 mt-2">
        <div class="house-left-content">
            <h3 class="mb-1">PETA LOKASI</h3>
            <p class="mb-3">Jln. Gegerkalong Tonggoh Raya No.6 Bandung, Jawa Barat, 40153</p>
            <div class="">
                <iframe class="w-full"
                height="450"
                style="border:0"
                loading="lazy"
                allowfullscreen
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCuZ5LYlzoNakNLswf73lPIav6lQF655VM
                    &q=Space+Needle,Seattle+WA">
                </iframe>
            </div>
        </div>
        <div class="w-full centered2">
            <div class="chip2 bg-primary ftc mb-2"><h3>Rp 200.000.000</h3></div>
            <div class="unit-data-outline grid grid-3col mb-2">
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
            <div class="chip2 bg-orange ftc mb-2">GOLDEN KREASI MANDIRI</div>
            <p class="house-address">
                <b>KANTOR PEMASARAN</b><br>
                Jln. Gegerkalong Tonggoh Raya No.6 Bandung<br>
                <a href="tel:+">+62 857 2056 8967</a><br>
                <a href="mailto:">pakasep@gmail.com</a><br>
                <a href="http://">pakasep.co.id</a>
            </p>
        </div>
    </div>
@endsection