<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PAKASEP</title>
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
                    <div class="left">
                        @if(Route::currentRouteName() == 'satu' || Route::currentRouteName() == 'dua')
                            <a href="{{ url()->previous() }}" class="left c-grey-3">
                                <span class="material-icons c-grey-3 next-arrow">
                                    keyboard_arrow_left
                                </span> Kembali
                            </a>
                        @endif
                    </div>
                    <div class="right">
                        @if(Route::currentRouteName() == 'log-join')
                            <div class="login-link">
                                Sudah Punya Akun? <a href="{{ route('log-login') }}">MASUK DISINI</a>
                            </div>
                        @elseif(Route::currentRouteName() == 'log-login')
                            <div class="login-link">
                                Belum Punya Akun? <a href="{{ route('log-join') }}">DAFTAR DISINI</a>
                            </div>
                        @elseif(Route::currentRouteName() == 'satu')
                            <div class="page-info">
                                <div class="line-1">HALAMAN 01/02</div>
                                <div class="line-2 c-grey-3">Informasi Login</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="hpc-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>