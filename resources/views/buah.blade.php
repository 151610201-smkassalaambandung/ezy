<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
		@for($a=1;$a<=$no;$a++)
		{{$a}}
		@endfor
		<br>
		@foreach($buah as $data)
		 {{$data}}<hr>
		 @endforeach
</body>
</html>