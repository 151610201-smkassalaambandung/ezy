<!DOCTYPE html>
<html>
<head>
	<title>Parameter</title>
</head>
<body>
		Daftar : <b> {{$data}} {{$data2}} </b>
		<br>
		@foreach($query as $datas)
		 <li>{{$datas}}</li>
		 @endforeach
</body>
</html>