<!doctype html>
<html class = "html-welcome" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}"> 

        <script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
   
        <link rel="shortcut icon" href = "images/favicon.ico"/>
       
        <title>@yield('title','Deafult') | Madness Technology</title>


    </head>
    <body class = "body-welcome">
        
        
        <section>
         @yield('content')
        <section>

        
            
    </body>
</html>