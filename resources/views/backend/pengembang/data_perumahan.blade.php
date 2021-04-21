@extends('backend.template.base')
@section('content')
    <div class="w-full mb-6 centered">
        <a href="" class="bg-purple btn-fill ftc w-25">AJUKAN PERUMAHAN</a>
    </div>
    
    <div class="gallery-grid-wrap mb-1-5">
        <div class="unit-card">
            <figure class="units-preview-wrap">
                <img class="unit-preview-img" src="images/bg1.png" alt="">
            </figure>
            @foreach($rumah as $r)
                <div class="unit-data-wrap">
                    <h3 class="post-title mb-1">{{$r->data()['Nama Perumahan']}}</h3>
                    <p class="desc-address mb-2">{{$r->data()['Alamat Perumahan']}}</p>
                    <div class="unit-data-grid mb-2">
                        <div class="unit-data-item">
                            <span class="material-icons c-primary unit-data-item-icon">
                                article
                            </span>
                            <div class="unit-data-item-text">
                                <p>{{$r->data()['Luas Lahan']}}x{{$r->data()['Luas Bangunan']}}</p>
                            </div>
                        </div>
                        <div class="unit-data-item">
                            <span class="material-icons c-primary unit-data-item-icon">
                                article
                            </span>
                            <div class="unit-data-item-text">
                                <p>{{$r->data()['Kamar Tidur']}} kt</p>
                            </div>
                        </div>
                        <div class="unit-data-item">
                            <span class="material-icons c-primary unit-data-item-icon">
                                article
                            </span>
                            <div class="unit-data-item-text">
                                <p>{{$r->data()['Kamar Mandi']}} km</p>
                            </div>
                        </div>
                    </div>
                    <p class="desc-address2">{{$r->data()['Kecamatan']}}, {{$r->data()['Kota']}}, {{$r->data()['Provinsi']}}<br>
                        <div class="desc-address3 mb-1">
            {{--dd($developer)--}}
                            @foreach($developer as $d)
                                {{$d->data()['Instansi']}} ({{--$d->data()['Asosiasi']--}})</div>
                            @endforeach
                        </div>
                    </p>
                    <a href="" class="btn-fill bg-purple ftc">Lihat Detail Lokasi</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection