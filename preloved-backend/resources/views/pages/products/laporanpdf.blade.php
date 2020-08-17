<!DOCTYPE html>
<html>
<head>
	<title>Rekap Laporan Daftar Barang Allbrands Preloved</title>
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
		<h5>Rekap Laporan Daftar Barang Allbrands Preloved</h4>
		<!-- <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
	</center>
 
	<table class='table table-bordered text-center'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nama</th>
                <th>Type</th>
                <th>Harga</th>
                <th>Stok Barang</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>