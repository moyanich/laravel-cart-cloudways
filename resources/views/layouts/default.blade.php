<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cloudways Shop</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

	<style>
		body {
			font-family: 'Inter', sans-serif;
		}
	</style>
</head>

<body>

	<header>

		@include('includes.header')

	</header>

	<div id="main" class="row">

		@yield('content')

	</div>

	<footer class="row">

		@include('includes.footer')

	</footer>


</body>

</html>