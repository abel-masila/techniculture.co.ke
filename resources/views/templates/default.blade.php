<!DOCTYPE html>
<html>
<head>
	<title>AquaTech</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-lumen.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('css/main.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('css/Footer-with-map.css')}}" />
	
</head>
<body>
	@include('templates.partials.navigation')
    <div class="container">
    	@include('templates.partials.alerts')
        @yield('content')
    </div>
    @include('templates.partials.footer')
    <div class="container">
        @yield('footer')
    </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>