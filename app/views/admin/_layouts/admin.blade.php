<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning-Laravel</title>
	{{ HTML::style('css/admin.css')}}
</head>
<body>
	<header>
		<div class="container">
			<h1>Learning Laravel - Admin Panel</h1>
		</div>
	</header>
	<main class="container">
		@yield('content')
	</main>
	<footer>
		<div class="container">
			&copy; {{ date('Y')}} Nandini Bhaduri
		</div>
	</footer>
</body>
</html>