<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<table border="1">
		<tr class="bg-info">
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
		</tr>
			<?php $no=1;?>
			@foreach($a as $data)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$data->nama}}</td>
			<td>{{$data->alamat}}</td>
			<td>{{$data->jk}}</td>
		</tr>
			@endforeach
	</table>
</center>
</body>
</html>