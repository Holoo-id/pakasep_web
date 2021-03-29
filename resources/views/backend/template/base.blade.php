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
<body id="gradient-pg-bg" class="backend-layout">
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
            Halo, <b>{{Session::get('instansi')}}</b><br>Selamat Datang Di Dashboard Pengembang <b>PAKASEP</b>
        </div>
        @yield('content')
        <div class="foot mt-5">© 2021 — <b>PAKASEP</b> Dashboard untuk BANK (versi 1.0)</div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        $(document).ready(function() {
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
        } );
    </script>
</body>
</html>