<!DOCTYPE html>
<html>
<head>
	<title>Parameter</title>
</head>
<body>
		Daftar : <b> {{$pil}} {{$jenis}} </b>
		<br>
		@foreach($br as $data)
		 <li>{{$data}}</li>
		 @endforeach
</body>
</html>