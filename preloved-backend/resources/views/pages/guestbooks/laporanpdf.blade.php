<!DOCTYPE html>
<html>
<head>
	<title>Rekap Laporan Pengunjung Website Allbrands Preloved</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 10pt;
		}
	</style>
	<center>
		<h5>Rekap Laporan Pengunjung Website Allbrands Preloved</h4>
	</center>
 
	<table class='table table-bordered text-center'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Asal Kunjungan</th>
                <th>Penilaian</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
                <td>{{$item->nama_tamu}}</td>
                <td>{{$item->email_tamu}}</td>
                <td>{{$item->asal_tamu}}</td>
                <td>{{$item->nilai_tamu}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>