<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
</head>

<body>
	<h1>{{ $title }}</h1>
	@if (isset($users))
		<ol>
		@foreach ($users as $user)
			<li>{{ $user }}</li>
		@endforeach
		</ol>
	@endif

</body>
</html>
