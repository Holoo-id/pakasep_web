<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css ') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="backend-layout">
    <div class="half-page-wrap">
        <div class="gradient-pg-bg half-page-bg">
            <figure>
                <img src="{{ asset('images/website-pengembang.png') }}" alt="">
            </figure>
        </div>
        <div class="half-page-content">
            <div class="header">
                <div class="left"></div>
                <div class="right">
                    <div class="login-link">
                        Belum Punya Akun? <a href="#">DAFTAR DISINI</a>
                    </div>
                </div>
            </div>
            <div class="hpc-body">
                <h2 class="hpc-title">Silahkan Masuk</h2>
                <p class="mv-1 hpc-subtitle c-grey-3">Masuk menggunakan data yang sudah di daftarkan sebelumnya.</p>
                <hr>
                <form action="/auth" method="get" enctype="multipart/form-data">
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
                <div class="divider-wrap mv-1">
                    <p class="text-divider"><span>atau</span></p>
                </div>
                <a href="" class="google-button">
                    <img src="{{ asset('images/flat-color-icons_google.png') }}" alt="">
                    Masuk Dengan Akun Google</a>
            </div>
        </div>
    </div>
</body>
</html>