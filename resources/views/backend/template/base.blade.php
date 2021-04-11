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
            <li><a href="{{ route('step-1') }}">AJUKAN PERUMAHAN</a></li>
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

            $('#provinsi_dok').change( function() {
               $.getJSON('/pengembang/dataKota/'+$('#provinsi_dok').val(), 
               function(data){
                    $('#kota_dok').find('option').remove();
                   
                    $.each(data, function(title,arrayKota){
                        $.each(arrayKota, function(i,j){
                            $( "#kota_dok" ).prop( "disabled", false )
                            $('#kota_dok').append(new Option(j['nama'],j['id']))
                            $('#kota_verif').val($('#kota_dok option:selected').text())
                            $( "#kota_verif" ).prop( "disabled", true )
                           
                        });
                    })
                    
               });
               
            });
        

        //kecamatan
        $('div.setup-panel div a.active').trigger('click');

            $('#kota_dok').change( function() {
               $.getJSON('/pengembang/dataKecamatan/'+$('#kota_dok').val(), 
               function(dataKec){
                    $('#kecamatan_dok').find('option').remove();
                    $.each(dataKec, function(title,arrayKecamatan){
                        $.each(arrayKecamatan, function(k,t){
                            $( "#kecamatan_dok" ).prop( "disabled", false )
                            $('#kecamatan_dok').append(new Option(t['nama'],t['id']))
                            $('#kecamatan_verif').val($('#kecamatan_dok option:selected').text())
                            $( "#kecamatan_verif" ).prop( "disabled", true )
                        });
                    })
               });
               
            });

            //kelurahan
            $('div.setup-panel div a.active').trigger('click');

            $('#kecamatan_dok').change( function() {
               $.getJSON('/pengembang/dataKelurahan/'+$('#kecamatan_dok').val(), 
               function(dataKel){
                    $('#kelurahan_dok').find('option').remove();
                    $.each(dataKel, function(title,arrayKelurahan){
                        $.each(arrayKelurahan, function(k,l){
                            $( "#kelurahan_dok" ).prop( "disabled", false )
                            $('#kelurahan_dok').append(new Option(l['nama'],l['id']))
                            $('#kelurahan_verif').val($('#kelurahan_dok option:selected').text())
                            $( "#kelurahan_verif" ).prop( "disabled", true )
                        });
                    })
               });
               
            });

            $('#provinsi_dok').change(function(){
                $('#provinsi_verif').val($('#provinsi_dok option:selected').text());
                $( "#provinsi_verif" ).prop( "disabled", true );
            });
            $('#pdfIMB_dok').change(function(){
                $('#pdfIMB_verif').val($('#pdfIMB_dok').val());
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
                document.getElementById("kota_dok").disabled = true;

                document.getElementById("kelurahan_dok").value = "";
                document.getElementById("kecamatan_dok").value = "";
                document.getElementById("kota_dok").value = "";
            }
            function formDisKota(){
                document.getElementById("kecamatan_dok").disabled = true;
                document.getElementById("kelurahan_dok").disabled = true;

                document.getElementById("kelurahan_dok").value = "";
                document.getElementById("kecamatan_dok").value = "";
            }
            function formDisKec(){
                document.getElementById("kelurahan_dok").disabled = true;
                document.getElementById("kelurahan_dok").value = "";
            }

            function getValueDokToVerif(){
                document.getElementById("namaPerumahan_verif").value = 
                document.getElementById("namaPerumahan_dok").value;

                document.getElementById("jenisPerumahan_verif").value = 
                document.getElementById("jenisPerumahan_dok").value;

                document.getElementById("nomorIMB_verif").value = 
                document.getElementById("nomorIMB_dok").value;

                document.getElementById("alamatPerumahan_verif").value = 
                document.getElementById("alamatPerumahan_dok").value;

                document.getElementById("nik_verif").value = 
                document.getElementById("nik_dok").value;


                document.getElementById("tanggalIMB_verif").value = 
                document.getElementById("tanggalIMB_dok").value;
            }
        
        </script>
    </body>
</html>