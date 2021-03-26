@extends('backend.template.base')
@section('content')
    <div class="notif-card">
        <h3>Catatan:</h3>
        <ul class="notif-list">
            <li>Anda bisa mengunduh semua data nasabah yang mengajukan dengan cara klik tombol <b>DOWNLOAD CSV.</b></li>
            <li>Untuk mengunduh data perorangan dari nasabah, anda bisa klik tombol <b>DOWNLOAD PDF.</b></li>
            <li>Selama tahap verifikasi, pihak Bank wajib mengubah status pengajuan secara berkala sesuai dengan verifikasi yang sedang berlangsung.</li>
            <li>Status pengajuan terdiri tahapan-tahapan, yaitu:<b> PERLU VERIFIKASI - SEDANG PROSES - SELESAI / TIDAK DISETUJUI.</b></li>
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
    <div class="table-intro-dashboard mv-2">
        <h2>Data Pengajuan Nasabah</h2>
        <div class="button-bar">
            <button class="dt-g-btn">Download CSV 
                <span class="material-icons">
                    file_download
                </span>
            </button>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nomor TX</th>
                <th>Status Pengajuan</th>
                <th>Nasabah</th>
                <th>Perumahan Yang Dipilih</th>
                <th>Tanggal Pengajuan</th>
                <th>Bank Pilihan</th>
                <th>Download Berkas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#2458</td>
                <td>
                    <select href="" class="status-badge bg-orange2">Sedang Proses
                        <option value="" class="bg-orange2">Sedang Proses</option>
                        <option value="" class="bg-green">Disetujui</option>
                        <option value="" class="bg-blue">Perlu Verifikasi</option>
                        <option value="" class="bg-purple">Selesai</option>
                        <option value="" class="bg-red">Tidak Disetujui</option>
                    </select>
                </td>
                <td>Darrell Williamson</td>
                <td>Corona, Michigan</td>
                <td>01/22/15 17:15</td>
                <td>Bank BTN</td>
                <td>
                    <a href="" class="dt-g-btn">Download PDF 
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>#2458</td>
                <td>
                    <a href="" class="status-badge bg-orange2">Sedang Proses</a>
                </td>
                <td>Darrell Williamson</td>
                <td>Corona, Michigan</td>
                <td>01/22/15 17:15</td>
                <td>Bank BTN</td>
                <td>
                    <a href="" class="dt-g-btn">Download PDF 
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>#2458</td>
                <td>
                    <a href="" class="status-badge bg-green">Disetujui</a>
                </td>
                <td>Darrell Williamson</td>
                <td>Corona, Michigan</td>
                <td>01/22/15 17:15</td>
                <td>Bank BTN</td>
                <td>
                    <a href="" class="dt-g-btn">Download PDF 
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>#2458</td>
                <td>
                    <a href="" class="status-badge bg-blue">Perlu Verifikasi</a>
                </td>
                <td>Darrell Williamson</td>
                <td>Corona, Michigan</td>
                <td>01/22/15 17:15</td>
                <td>Bank BTN</td>
                <td>
                    <a href="" class="dt-g-btn">Download PDF 
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>#2458</td>
                <td>
                    <a href="" class="status-badge bg-purple">Selesai</a>
                </td>
                <td>Darrell Williamson</td>
                <td>Corona, Michigan</td>
                <td>01/22/15 17:15</td>
                <td>Bank BTN</td>
                <td>
                    <a href="" class="dt-g-btn">Download PDF 
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>#2458</td>
                <td>
                    <a href="" class="status-badge bg-red">Tidak Disetujui</a>
                </td>
                <td>Darrell Williamson</td>
                <td>Corona, Michigan</td>
                <td>01/22/15 17:15</td>
                <td>Bank BTN</td>
                <td>
                    <a href="" class="dt-g-btn">Download PDF 
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Nomor TX</th>
                <th>Status Pengajuan</th>
                <th>Nasabah</th>
                <th>Perumahan Yang Dipilih</th>
                <th>Tanggal Pengajuan</th>
                <th>Bank Pilihan</th>
                <th>Download Berkas</th>
            </tr>
        </tfoot>
    </table>
@endsection