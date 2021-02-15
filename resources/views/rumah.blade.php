
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/tambah" enctype="multipart/form-data" method="post">
   @csrf
    <input type="text" name="nama_tempat" placeholder="Nama Tempat">
    <input type="text" name="alamat" placeholder="Alamat">
    <input type="text" name="provinsi" placeholder="Provinsi">
    <input type="text" name="kota" placeholder="Kota">
    <input type="text" name="kecamatan" placeholder="Kecamatan">
    <input type="text" name="asosiasi" placeholder="Asosiasi">
    <input type="text" name="tenor" placeholder="Tenor">
    <input type="text" name="bunga" placeholder="bunga">
    <input type="text" name="unit" placeholder="Unit">
    <input type="text" name="ukuran" placeholder="Ukuran">
    <input type="text" name="kamar" placeholder="Kamar">
    <input type="text" name="kamar_mandi" placeholder="Kamar Mandi">
    <input type="text" name="deskripsi" placeholder="Deskripsi">
    <input type="text" name="geolokasi" placeholder="Geolokasi">
    <input type="date" name="tgl_imb" placeholder="Tanggal IMB">
    <input type="date" name="tgl_dibuat" placeholder="Tanggal Dibuat">
    <input type="text" name="kontak" placeholder="kontak">
    <input type="text" name="gambar" placeholder="gambar">
    <input type="submit" class="btn btn-danger" value="masuk">
    
    </form>

   
</body>
</html>