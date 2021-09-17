<!DOCTYPE html>
<html lang="es">
<head>
	@include('includes.head') {{-- css global --}}
	<title>@yield('titulo', 'Examen | Kabir Alberto')</title>
	<meta name="description" content="@yield('descripcion', 'Descripcion')"/>
	<meta name="keywords" content="@yield('keywords', 'keywords')"/>
	@yield('styles') {{-- meta tags y css individuales --}}
</head>
<body>
	<div class="container-fluid">
		<header class="row">
			@include('includes.navbar')
		</header>
		<div class="row mb-5">
			@yield('contenido')
		</div>
		<footer>
			@include('includes.footer')
		</footer>
	</div>
	@include('includes.js') {{-- js global --}}
	@yield('scripts') {{-- js individual --}}
</body>
</html>