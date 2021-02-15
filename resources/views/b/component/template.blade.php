<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/main.css ') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>
<body id="gradient-pg-bg" class="backend-layout">
    <nav class="navbar">
        <ul class="top-menu ftc">
            <li><a href="">PROFIL PENGEMBANG</a></li>
            <hr>
            <li><a href="">PROFIL PERUMAHAN</a></li>
            <hr>
            <li><a href="">AJUKAN LOKASI PERUMAHAN</a></li>
            <hr>
            <li><a href="">CEK STATUS PENGAJUAN</a></li>
        </ul>
        <a href="#">
            <div class="brand-icon">
                <figure>
                    <img src="{{ asset('images/pakasep_logo.png') }}" alt="Logo Pakasep">
                </figure>
            </div>
        </a>
    </nav>
    <div class="side-nav">
        <ul>
            <li>
                <a href="">
                    <span class="material-icons">
                        sort
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="be-main">
        @yield('content')
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>
</html>