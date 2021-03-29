@extends('backend.template.base')
@section('content')
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
    <table id="dataPengajuanNasabah" class="display" style="width:100%">
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
    <div class="table-intro-dashboard mb-2 mt-5">
        <h2>Data Pengajuan Perumahan</h2>
        <div class="button-bar">
            <button class="dt-g-btn">Download CSV 
                <span class="material-icons">
                    file_download
                </span>
            </button>
        </div>
    </div>
    <table id="dataPengajuanPerumahan" class="display" style="width:100%">
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