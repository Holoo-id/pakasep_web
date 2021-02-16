<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css ') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
            <hr>
            <li><a href="/admin/dataRumah">DATA RUMAH TERDAFTAR</a></li>
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