@extends('backend.template.temp')
@section('content')
    <h2 class="hpc-title">Silahkan Masuk</h2>
    <p class="mv-1 hpc-subtitle c-grey-3">Masuk menggunakan data yang sudah di daftarkan sebelumnya.</p>
    <hr>
    <form action="{{ route('auth-login') }}" method="get" enctype="multipart/form-data">
        @csrf
        <div class="form-column">
            <label for="" class="be-form-label mb-1 mt-2">Email</label>
            <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
        </div>
        <div class="form-column">
            <label for="" class="be-form-label mb-1 mt-2">Password</label>
            <input class="be-form" type="password" name="password" id="" placeholder="Masukkan Password">
        </div>
        <input type="submit" value="Masuk" class="be-form-button mt-2">
    </form>
@endsection