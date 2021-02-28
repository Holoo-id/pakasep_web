<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>List Rumah</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th class="col-sm-3">Pengembang</th>
                <th>Asosiasi</th>
			</tr>
		</thead>
		<tbody>
        @php $no = 1; @endphp
        @foreach($rumah as $r)
			<tr>
                <td>{{ $no++ }}</td>
            <td>{{ $r->data()['nama_tempat'] }}</td>
                <td>{{ $r->data()['alamat'] }}</td>
                <td>{{ $r->data()['provinsi'] }}</td>
                <td>{{ $r->data()['kota'] }}</td>
                <td>{{ $r->data()['kecamatan'] }}</td>
                <td>{{ $r->data()['pengembang'] }}</td>
                <td>{{ $r->data()['asosiasi'] }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>