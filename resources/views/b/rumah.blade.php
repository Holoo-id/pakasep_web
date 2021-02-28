@extends('b.component.template')
@section('content')
    
    <div class="notif-card bg-purple">
        <ol class="notif-list ftc">
            <li>Pengembang wajib mengisi semua data yang dibutuhkan.</li>
            <li>Data yang diinput ke dalam database akan muncul di aplikasi <b>PAKASEP</b>.</li>
        </ol>
        <div class="bottom-right-text">Catatan</div>
    </div>
    <div class="table-intro-dashboard mb-2-5">
        <h2>Data Rumah Terdaftar</h2>
        <div class="button-bar">
            <button class="dt-g-btn">
                <span class="material-icons">
                    settings
                </span>
            <button class="btn btn-secondary dt-g-btn mh-1-5" data-toggle="modal" data-target="#modalTambahData">Tambah Data</button>
            <a href="/admin/dataRumah/pdfrumah" class="btn btn-primary">Cetak PDF
                <span class="material-icons">
                    file_upload
                </span>
            </a>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th>Asosiasi</th>
                <th>Aksi</th>

            </tr>
        </thead>
        @php $i = 1; @endphp
        @foreach($rumah as $r)
        <tbody>
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $r->data()['nama_tempat'] }}</td>
                <td>{{ $r->data()['alamat'] }}</td>
                <td>{{ $r->data()['provinsi'] }}</td>
                <td>{{ $r->data()['kota'] }}</td>
                <td>{{ $r->data()['kecamatan'] }}</td>
                <td>{{ $r->data()['asosiasi'] }}</td>
                <td><button class="btn btn-success" data-toggle="modal" data-target="#modalEdit{{ $r->id() }}">Edit</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#modalHapusBarang{{ $r->id() }}">Delete</button></td>
            </tr>
        </tbody>

        <div class="modal fade" id="modalHapusBarang{{ $r->id() }}" tabindex="-1" aria-labelledby="modalHapusBarang" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
            <div class="modal-body">    
        <h4 class="text-center">Apakah anda yakin menghapus barang ini? :</h4>
        </div>
            <div class="modal-footer">
                    <a href="/hapus/{{ $r->id() }}" class="btn btn-primary">Hapus</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak Jadi</button>
            </div>
        </div>
        </div>
        </div>

        <div class="modal fade" id="modalEdit{{ $r->id() }}" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
            <div class="modal-dialog">
        <div   div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
        <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <div class="modal-body">

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





<!--FORM UPDATE BARANG-->
            <form action="/edit/{{ $r->id() }}" method="post" enctype="multipart/form-data">
          @csrf

            <div class="form-group">
            <label for="">Nama Tempat</label>
            <input type="text" class="form-control" id="nama_tempat" name="nama_tempat"
            value="{{ $r->data()['nama_tempat'] }}">
            </div>
            <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"
            value="{{ $r->data()['alamat'] }}">
            </div>
            <div class="form-group">
            <label for="">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi"
            value="{{ $r->data()['provinsi'] }}">
            </div>
            <div class="form-group">
            <label for="">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota"
            value="{{ $r->data()['kota'] }}">
            </div>
            <div class="form-group">
            <label for="">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan"
            value="{{ $r->data()['kecamatan'] }}">
            </div>
            <div class="form-group">
            <label for="">Pengembang</label>
            <input type="text" class="form-control" id="asosiasi" name="pengembang"
            value="{{ $r->data()['pengembang'] }}">
            </div>
            <div class="form-group">
            <label for="">Asosiasi</label>
            <input type="text" class="form-control" id="asosiasi" name="asosiasi"
            value="{{ $r->data()['asosiasi'] }}">
            </div>
            <div class="form-group">
            <label for="">Tenor</label>
            <input type="text" class="form-control" id="tenor" name="tenor"
            value="{{ $r->data()['tenor'] }}">
            </div>
            <div class="form-group">
            <label for="">Bunga</label>
            <input type="text" class="form-control" id="bunga" name="bunga"
            value="{{ $r->data()['bunga'] }}">
            </div>
            <div class="form-group">
            <label for="">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit"
            value="{{ $r->data()['unit'] }}">
            </div>
            <div class="form-group">
            <label for="">Ukuran</label>
            <input type="text" class="form-control" id="ukuran" name="ukuran"
            value="{{ $r->data()['ukuran'] }}">
            </div>
            <div class="form-group">
            <label for="">Kamar</label>
            <input type="text" class="form-control" id="kamar" name="kamar"
            value="{{ $r->data()['kamar'] }}">
            </div>
            <div class="form-group">
            <label for="">Kamar mandi</label>
            <input type="text" class="form-control" id="kamar_mandi" name="kamar_mandi"
            value="{{ $r->data()['kamar_mandi'] }}">
            </div>
            <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
            value="{{ $r->data()['deskripsi'] }}">
            </div>
            <div class="form-group">
            <label for="">Geolokasi</label>
            <input type="text" class="form-control" id="geolokasi" name="geolokasi"
            value="">
            </div>
            <div class="form-group">
            <label for="">Tanggal IMB</label>
            <input type="date" class="form-control" id="tbl_imb" name="tgl_imb"
            value="{{ $r->data()['tanggal_imb'] }}">
            </div>
            <div class="form-group">
            <label for="">Tanggal Dibuat</label>
            <input type="date" class="form-control" id="tgl_dibuat" name="tgl_dibuat"
            value="{{ $r->data()['tanggal_dibuat'] }}">
            </div>
            <div class="form-group">
            <label for="">Kontak</label>
            <input type="text" class="form-control" id="kontak" name="kontak"
            value="">
            </div>
            <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar"
            value="">
            </div>
            
           
            <button type="submit" class="btn btn-primary">Perbarui Data</button>
            </form>
<!--END FORM UPDATE BARANG-->
                </div>
                </div>
                </div>
                </div>
<!-- End Modal UPDATE Barang-->


<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">
            <div class="modal-dialog">
        <div   div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <div class="modal-body">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif







<!--FORM UPDATE BARANG-->
            <form action="/admin/tambah" method="post" enctype="multipart/form-data">
          @csrf

            <div class="form-group">
            <label for="">Nama Tempat</label>
            <input type="text" class="form-control" id="nama_tempat" name="nama_tempat">
            </div>
            <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
            <label for="">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi">
            </div>
            <div class="form-group">
            <label for="">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota">
            </div>
            <div class="form-group">
            <label for="">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
            </div>
            <div class="form-group">
            <label for="">Pengembang</label>
            <input type="text" class="form-control" id="asosiasi" name="pengembang">
            </div>
            <div class="form-group">
            <label for="">Asosiasi</label>
            <input type="text" class="form-control" id="asosiasi" name="asosiasi">
            </div>
            <div class="form-group">
            <label for="">Tenor</label>
            <input type="text" class="form-control" id="tenor" name="tenor">
            </div>
            <div class="form-group">
            <label for="">Bunga</label>
            <input type="text" class="form-control" id="bunga" name="bunga">
            </div>
            <div class="form-group">
            <label for="">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit">
            </div>
            <div class="form-group">
            <label for="">Ukuran</label>
            <input type="text" class="form-control" id="ukuran" name="ukuran">
            </div>
            <div class="form-group">
            <label for="">Kamar</label>
            <input type="text" class="form-control" id="kamar" name="kamar">
            </div>
            <div class="form-group">
            <label for="">Kamar mandi</label>
            <input type="text" class="form-control" id="kamar_mandi" name="kamar_mandi">
            </div>
            <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>
            <div class="form-group">
            <label for="">Geolokasi</label>
            <input type="text" class="form-control" id="geolokasi" name="geolokasi">
            </div>
            <div class="form-group">
            <label for="">Tanggal IMB</label>
            <input type="date" class="form-control" id="tbl_imb" name="tgl_imb">
            </div>
            <div class="form-group">
            <label for="">Tanggal Dibuat</label>
            <input type="date" class="form-control" id="tgl_dibuat" name="tgl_dibuat">
            </div>
            <div class="form-group">
            <label for="">Kontak</label>
            <input type="text" class="form-control" id="kontak" name="kontak">
            </div>
            <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            
           
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
<!--END FORM UPDATE BARANG-->
                </div>
                </div>
                </div>
                </div>
<!-- End Modal UPDATE Barang-->


    @endforeach
        <tfoot>
            <tr>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th>Asosiasi</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>

    
@endsection

