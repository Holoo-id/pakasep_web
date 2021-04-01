<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAKASEP</title>
    <link rel="stylesheet" href="{{ asset('css/main.css ') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>
<body class="gradient-pg-bg backend-layout">
    <nav class="navbar">
        <!-- Pengembang Only Menu -->
        <ul class="top-menu ftc">
            <li><a href="{{ route('pengembang-profil') }}">PROFIL PENGEMBANG</a></li>
            <hr>
            <li><a href="{{ route('pengembang-perumahan') }}">DATA PERUMAHAN</a></li>
            <hr>
            <li><a href="{{ route('pengembang-pengajuan') }}">AJUKAN PERUMAHAN</a></li>
            <hr>
            <li><a href="{{ route('pengembang-status') }}">STATUS PENGAJUAN</a></li>
        </ul>
        <!-- Else, Boleh kosong -->
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
        <div class="welcome-text mb-1">
            Halo, 
            <b>{{Session::get('instansi')}}!</b>
            <br>Selamat Datang Di Dashboard Pengembang 
            <b>PAKASEP</b>
            <br><br>
            <p>Berikut Data Perumahan Anda:</p>
        </div>
        @yield('content')
        <div class="foot mt-5">© 2021 — <b>PAKASEP</b> Dashboard untuk BANK (versi 1.0)</div>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataPengajuanNasabah').DataTable();
            $('#dataPengajuanPerumahan').DataTable();

            var navListItems = $('div.setup-panel div a'),
                    allWells = $('.setup-content'),
                    allPrevBtn = $('.prevBtn'),
                    allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                        $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('active').addClass('inactive');
                    $item.addClass('active');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });
            allPrevBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    prevStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.active').trigger('click');

            $('#provinsi_dok').change( function() {
               $.getJSON('/pengembang/dataKota/'+$('#provinsi_dok').val(), 
               function(data){
                    $('#kota_dok').find('option').remove();
                    $.each(data, function(title,arrayKota){
                        $.each(arrayKota, function(i,j){
                            $('#kota_dok').append(new Option(j['nama'],j['id']))
                        });
                    })
               });
               
            });
        } );
    </script>

<script>
        function getValue(){
            document.getElementById("namaTipe_verif").value = 
            document.getElementById("namaTipe_rumah").value;

            document.getElementById("kamarMandi_verif").value = 
            document.getElementById("kamarMandi_rumah").value;

            document.getElementById("harga_verif").value = 
            document.getElementById("harga_rumah").value;

            document.getElementById("teknisAtap_verif").value = 
            document.getElementById("teknisAtap_rumah").value;

            document.getElementById("luasLahan_verif").value = 
            document.getElementById("luasLahan_rumah").value;

            document.getElementById("teknisDinding_verif").value = 
            document.getElementById("teknisDinding_rumah").value;

            document.getElementById("luasBangunan_verif").value = 
            document.getElementById("luasBangunan_rumah").value;

            document.getElementById("teknisLantai_verif").value = 
            document.getElementById("teknisLantai_rumah").value;

            document.getElementById("kamarTidur_verif").value = 
            document.getElementById("kamarTidur_rumah").value;

            document.getElementById("teknikPondasi_verif").value = 
            document.getElementById("teknisDinding_rumah").value;

   
        }
        function formDisProv(){
            document.getElementById("kelurahan_dok").disabled = true;
            document.getElementById("kecamatan_dok").disabled = true;

            document.getElementById("kelurahan_dok").value = "";
            document.getElementById("kecamatan_dok").value = "";
            document.getElementById("kota_dok").value = "";
        }
        function formDisKota(){
            document.getElementById("kecamatan_dok").disabled = false;

            document.getElementById("kelurahan_dok").value = "";
            document.getElementById("kecamatan_dok").value = "";
        }
        function formDisKec(){
            document.getElementById("kelurahan_dok").disabled = false;
            document.getElementById("kelurahan_dok").value = "";
        }
        function getValueDokToVerif(){
            document.getElementById("namaPerumahan_verif").value = 
            document.getElementById("namaPerumahan_dok").value;

            document.getElementById("provinsi_verif").value = 
            document.getElementById("optionProvinsi").value;

            document.getElementById("jenisPerumahan_verif").value = 
            document.getElementById("jenisPerumahan_dok").value;

            document.getElementById("nomorIMB_verif").value = 
            document.getElementById("nomorIMB_dok").value;

            document.getElementById("alamatPerumahan_verif").value = 
            document.getElementById("alamatPerumahan_dok").value;

            document.getElementById("nik_verif").value = 
            document.getElementById("nik_dok").value;

            document.getElementById("kelurahan_verif").value = 
            document.getElementById("kelurahan_dok").value;

            document.getElementById("tanggalIMB_verif").value = 
            document.getElementById("tanggalIMB_dok").value;

            document.getElementById("kecamatan_verif").value = 
            document.getElementById("kecamatan_dok").value;

            document.getElementById("pdfIMB_verif").value = 
            document.getElementById("pdfIMB_dok").value;

            document.getElementById("kota_verif").value = 
            document.getElementById("kota_dok").value;

   
        }
    </script>
</body>
</html>