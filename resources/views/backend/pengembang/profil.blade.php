@extends('backend.template.base')
@section('content')
    <div class="colored-card-wrap ftc">
        <div class="be-colored-card-1">
            <h4 class="colored-card-title">PERUMAHAN TERDAFTAR</h4>
            <p class="number-data">99</p>
        </div>
        <div class="be-colored-card-2">
            <h4 class="colored-card-title">PENGAJUAN MASUK</h4>
            <p class="number-data">10</p>
        </div>
        <div class="be-colored-card-3">
            <h4 class="colored-card-title">PENGAJUAN BERHASIL</h4>
            <p class="number-data">10</p>
        </div>
        <div class="be-colored-card-4">
            <h4 class="colored-card-title">PENGAJUAN DITOLAK</h4>
            <p class="number-data">10</p>
        </div>
    </div>
    <div class="grid grid-2col mt-2">
        <div class="developer-bio">
            <a href="">edit</a>
            <table>
                <tbody>
                    @if(Session::get('nama') != '')
                        <tr>
                            <td class="left-sec">Nama Lengkap</td>
                            <td>{{Session::get('nama')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('noktp') != '')
                        <tr>
                            <td class="left-sec">Nomor KTP</td>
                            <td>{{Session::get('noktp')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('tgllahir') != '')
                        <tr>
                            <td class="left-sec">Tanggal Lahir</td>
                            <td>{{Session::get('tgllahir')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('telepon') != '')
                        <tr>
                            <td class="left-sec">No. Handphone</td>
                            <td>+62 {{Session::get('telepon')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('email') != '')
                        <tr>
                            <td class="left-sec">Email</td>
                            <td>{{Session::get('email')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('asosiasi') != '')
                        <tr>
                            <td class="left-sec">Asosiasi</td>
                            <td>{{Session::get('asosiasi')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('instansi') != '')
                    <tr>
                        <td class="left-sec">Pengembang</td>
                        <td>{{Session::get('instansi')}}</td>
                    </tr>
                    @endif
                    @if(Session::get('pemasaran') != '')
                        <tr>
                            <td class="left-sec">Kantor Pemasaran</td>
                            <td>{{Session::get('pemasaran')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('telepon') != '')
                        <tr>
                            <td class="left-sec">No. Telepon</td>
                            <td>+62 {{Session::get('telepon2') ?? ''}}</td>
                        </tr>
                    @endif
                    @if(Session::get('email') != '')
                        <tr>
                            <td class="left-sec">Email</td>
                            <td>{{Session::get('email2')}}</td>
                        </tr>
                    @endif
                    @if(Session::get('website') != '')
                        <tr>
                            <td class="left-sec">Website</td>
                            <td>{{Session::get('website') ?? ''}}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="notif-card">
            <h3 class="mb-1">Catatan:</h3>
            <ul class="notif-list">
                <li>Sebelum melanjutkan ke isi data pengajuan perumahan, anda wajib mengisi kolom yang belum terisi diatas.</li>
                <li>Pastikan tidak salah memasukkan data dokumen dari perumahan yang anda kelola.</li>
                <li>Anda bisa mengunduh semua data nasabah yang mengajukan dengan cara klik tombol <b>DOWNLOAD CSV</b> di menu <b>STATUS PENGAJUAN</b>.</li>
                <li>Untuk mengunduh data perorangan dari nasabah, anda bisa klik tombol <b>DOWNLOAD PDF</b>.</li>
                <li>Selama tahap verifikasi, pihak pengembang bisa memantau proses verifikasi dari menu <b>STATUS PENGAJUAN</b>.</li>
                <li>Status pengajuan terdiri tahapan-tahapan, yaitu: <b>PERLU VERIFIKASI - SEDANG PROSES - DISETUJUI / TIDAK DISETUJUI - SELESAI</b>.</li>
                <li>Urutan tahapan pengajuan:
                    <ol>
                        <li>Bank mengecek status SLIK nasabah, status pengajuan masih di tahap <b>SEDANG PROSES.</b></li>
                        <li>Jika SLIK nasabah bagus, rubah status menjadi <b>PERLU VERIFIKASI.</b> / Jika SLIK nasabah tidak bagus, rubah status menjadi <b>TIDAK DISETUJUI.</b></li>
                        <li>Jika proses verifikasi nasabah lancar, rubah status menjadi <b>DISETUJUI.</b></li>
                        <li>Setelah bank dan pengembang telah berkomunikasi untuk proses pencairan, rubah status menjadi <b>SELESAI.</b></li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
@endsection