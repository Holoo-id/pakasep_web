@extends('backend.template.base')
@section('content')
    <!-- StepWizard -->
    <div class="stepwizard">
        <div class="stepwizard-row mh-2">
            <div class="stepwizard-step">
                <a href="{{ route('step-1') }}" type="button" class="circle-button {{ Route::currentRouteName() == 'step-1' ? 'active' : 'inactive' }}" disabled>1</a>
                <p>Data Rumah</p>
            </div>
            <div class="stepwizard-step">
                <a href="{{ route('step-2') }}" type="button" class="circle-button {{ Route::currentRouteName() == 'step-2' ? 'active' : 'inactive' }}" disabled>2</a>
                <p>Dokumen</p>
            </div>
            <div class="stepwizard-step">
                <a href="{{ route('step-3') }}" type="button" class="circle-button {{ Route::currentRouteName() == 'step-3' ? 'active' : 'inactive' }}" disabled>3</a>
                <p>Foto</p>
            </div>
            <div class="stepwizard-step">
                <a href="{{ route('step-4') }}" type="button" class="circle-button {{ Route::currentRouteName() == 'step-4' ? 'active' : 'inactive' }}" disabled>4</a>
                <p>Verifikasi</p>
            </div>
        </div>
    </div>
    <div class="mh-2" id="pengajuanRumah">
        @yield('form')
    </div>
@endsection