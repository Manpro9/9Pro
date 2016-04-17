<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Admin</title>


  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css' )}}">
  <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/dist/AdminLTE.min.css' )}}">
  <link rel="stylesheet" href="{{ asset('public/css/login/blue.css' )}}">
  
  @yield('css')
  
  <!-- JS -->
  <script type="text/javascript" src="{{ asset('public/js/jQuery-2.2.2.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
  @yield('js') 
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

<body class="hold-transition login-page">
	
		@yield('login')

  	<script>
  		$(function () {
    	$('input').iCheck({
      	checkboxClass: 'icheckbox_square-blue',
      	radioClass: 'iradio_square-blue',
      	increaseArea: '20%' // optional
    		});
  		});
    </script>
</body>
</html>