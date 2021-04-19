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
                <a href="daftar_pengembang.html" class="left c-grey-3">
                    <span class="material-icons c-grey-3 next-arrow">
                        keyboard_arrow_left
                    </span> Kembali
                </a>
                </div>
            </div>
            <div class="hpc-body">
                <h2 class="hpc-title">Buat Akun Pengembang</h2>
                <p class="mv-1 hpc-subtitle c-grey-3">Masukan data yang harus diisi .</p>
                <hr>
                <form action="" method="" enctype="multipart/form-data">
                @csrf
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Nama Lengkap</label>
                        <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Email</label>
                        <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Password</label>
                        <input class="be-form" type="password" name="password" id="" placeholder="Masukkan Password">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Nomor KTP</label>
                        <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Tanggal Lahir</label>
                        <input class="be-form" type="date" name="password" id="" placeholder="Masukkan Password">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">No.Handphone</label>
                        <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Asosiasi</label>
                        <input class="be-form" type="text" name="password" id="" placeholder="Masukkan Password">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Nama Pengembang</label>
                        <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Kantor Pemasaran</label>
                        <input class="be-form" type="text" name="password" id="" placeholder="Masukkan Password">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">No.Telepon</label>
                        <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
                    </div>
                    <div class="form-column">
                        <label for="" class="be-form-label mb-1 mt-2">Website</label>
                        <input class="be-form" type="text" name="password" id="" placeholder="Masukkan Password">
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