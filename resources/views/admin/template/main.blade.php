<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Deafult') | Madness Technology</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

    <script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	
	<link rel="shortcut icon" href = "images/favicon.ico"/>

	<style>
		.test
		{
			background-color : red;
		}
	</style>

	<script>
		$(function ()
		{
			$(document).on("click",function()
			{
				$("#test").toggleClass("test");

			});
		});
	</script>
    
</head>
    
<body>
    @include('titulo')
    <section>
    @yield('titulo_sitio')
    </section>

    @include('admin.template.partials.nav')

    <section>
    @yield('content')
    </section>


    
    
</body>
</html>