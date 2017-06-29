<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
        <style type='text/css'>
        #bttop{border:1px solid #FD2243;border-radius:50px;background:#FD2243;text-align:center;padding-top:10px;padding-bottom:10px;padding-left:15px; padding-right:15px;position:fixed;bottom:60px;right:15px;cursor:pointer;display:none;color:#fff;font-weight:900;}
        #bttop:hover{border:1px solid #ffa789;background:#ff6734;}
        </style>
        <div id='bttop'><i class="fa fa-angle-up" style="font-size: 1.6em;font-weight: bold"></i></div>
        <script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js') }}"type='text/javascript'></script>
        <script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});
        </script>
        
    	@yield('head.css')
    </head>
    <body>
    		
    		@include('partials.header')
    			
			@yield ('body.content')

			@include('partials.footer')
    		<!-- jQuery -->
            <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
            <!-- My javascript   -->
            <script src="{{ asset('js/javascript.js') }}"></script>
            <!-- Bootstrap JavaScript -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>

            <script src="{{ asset('js/jquery.js') }}"></script>
            @yield('body.js')
    </body>
</html>