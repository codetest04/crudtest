<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	@foreach($tables as $table)
	<div>{{ $table }}</div>
	@endforeach
</body>
</html>