<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
		@foreach($buah as $data)
		 {{$data}}<hr>
		 @endforeach
		 <br>
		 @foreach($makhluk as $data)
		 {{$data}}<hr>
		 @endforeach
		 <br>
		 @foreach($komputer as $data)
		 {{$data}}<hr>
		 @endforeach

</body>
</html>