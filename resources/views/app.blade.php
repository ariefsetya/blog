<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="ini description">
        <meta name="keywords" content="ini keyword">
        <meta name="author" content="ini author">

        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <title>Ini Judul</title>

        <link href="{{ url('css/metro.css') }}" rel="stylesheet">
        <link href="{{ url('css/metro-icons.css') }}" rel="stylesheet">
        <link href="{{ url('css/metro-responsive.css') }}" rel="stylesheet">
        <link href="{{ url('css/metro-schemes.css') }}" rel="stylesheet">

        <script src="{{ url('js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ url('js/metro.js') }}"></script>
        <script src="{{ url('js/prettify/run_prettify.js') }}"></script>


    </head>
    <body>
    	@include('menu')
    	<div class="page-content">
            <div class="container">
                <div class="no-overflow" style="padding-top: 60px">
    				@yield('content')
    			</div>
    		</div>
    	</div>
	
        @yield('footer')

	</body>
</html>