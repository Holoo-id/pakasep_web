@extends('backend.template.base')
@section('content')
    <!-- StepWizard -->
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel mh-2">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="circle-button active">1</a>
                <p>Data Rumah</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="circle-button inactive" disabled="disabled">2</a>
                <p>Dokumen</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="circle-button inactive" disabled="disabled">3</a>
                <p>Foto</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="circle-button inactive" disabled="disabled">4</a>
                <p>Verifikasi</p>
            </div>
        </div>
    </div>
    <div class="mh-2" id="pengajuanRumah">
        @yield('form')
    </div>
@endsection