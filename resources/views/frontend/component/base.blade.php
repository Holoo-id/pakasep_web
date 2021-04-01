<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css ') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <nav class="gradient-pg-bg navbar">
        <ul class="fr-top-menu ftc">
            <li><a href="{{ route('index') }}">HOME</a></li>
            <hr>
            <li><a href="{{ route('user-gallery') }}">GALERI PERUMAHAN</a></li>
            <hr>
            <li><a href="http://bataru.id/">BATARU</a></li>
        </ul>
    </nav>
    @yield('content')
    <footer class="gradient-pg-bg pv-1">
        <p> © Copyright 2021 — 
            <a href="" class="footer-link">PAKASEP</a>
            . All Rights Reserved. Created by 
            <a href="" class="footer-link">Marketpreneur.id</a>
        </p>
    </footer>
</body>
</html>