<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'We-Lib') }}</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>
		<div id="app">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand" href="{{ url('home') }}">We-Lib</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a></li>
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('list-buku') }}">Daftar Buku</a></li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jenis Buku</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ url('list-buku/math') }}">Matematika</a>
					<a class="dropdown-item" href="{{ url('list-buku/sejarah') }}">Sejarah</a>
					<a class="dropdown-item" href="{{ url('list-buku/fisika') }}">Fisika</a>
					<a class="dropdown-item" href="{{ url('list-buku/kimia') }}">Kimia</a>
					<a class="dropdown-item" href="{{ url('list-buku/biologi') }}">Biologi</a>
					<a class="dropdown-item" href="{{ url('list-buku/indo') }}">Bahasa Indonesia</a>
					<a class="dropdown-item" href="{{ url('list-buku/english') }}">Bahasa Inggris</a>
					<a class="dropdown-item" href="{{ url('list-buku/sunda') }}">Bahasa Sunda</a>
					<a class="dropdown-item" href="{{ url('list-buku/agama') }}">Agama</a>
					<a class="dropdown-item" href="{{ url('list-buku/senibudaya') }}">Seni Budaya</a>
				<div class="dropdown-divider"></div>
				</div>
				</li>
				<li class="nav-item active">
					<div class="nav-link" href="#">Cari Buku</div></li>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</ul>
		</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
						@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Hello,{{ Auth::user()->name }} <span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Setting') }}</a>
								<a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
								</form>
							</div>
						</li>
					@endguest
					</ul>
				</div>
			</nav>
		</div>
			<main class="py-4">
				@yield('content')
			</main>
	</body>
</html>