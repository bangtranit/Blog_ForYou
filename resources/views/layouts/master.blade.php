<!DOCTYPE html>
<html>
<head>
	<title>@yield('head.title')</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	@yield('head.css')
</head>

<body>

	@include ('partials.navbar')

	@yield('body.content')

	@include ('partials.footer')
	<script src="{{asset('js/jquery.min.js')}}"></script>
</body>