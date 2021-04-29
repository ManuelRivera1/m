<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LOGIN</title>
        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/estilos.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/plugins/sweetalert2/sweetalert2.min.css')}}">        
        
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/fuentes/iconic/css/material-design-iconic-font.min.css')}}">
        
        

        <!-- Scripts -->
    </head>
    <body onload="load()">
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <script src="{{asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script>    
     <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>    
     <script src="{{asset('vendor/popper/popper.min.js')}}"></script>    
        
     <script src="{{asset('vendor/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>    
     <script src="{{asset('vendor/codigo.js')}}"></script>  
    </body>
</html>
