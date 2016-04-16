<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSDM UKDW</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css' )}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/dist/AdminLTE.min.css' )}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/dist/skins/_all-skins.min.css' )}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/content/custom.css' )}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/backToTop.css') }}">
  @yield('css')
  
  <!-- JS -->
  <script type="text/javascript" src="{{ asset('public/js/jQuery-2.2.2.min.js') }}"></script>
  @yield('js')
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
  <div class="wrapper">
    @include('layout.navbar')  
    @include('layout.sidebar')

    <div class="content-wrapper">
      
      <!-- Custom Content Title -->
      <section class="content-header">
        @yield('content-header')
      </section>
      
      <!-- Custom Content -->
      @yield('content') 
      </br></br></br></br></br></br>   
    </div>
    @include('layout.footer')
  </div>

  <!-- JS Inside Body -->
  <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js' )}}"></script>
  <script type="text/javascript" src="{{ asset('public/js/plugin/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/plugin/fastclick/fastclick.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/dist/app.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/backToTop.js') }}"></script>
  @yield('jsInsideBody')
</body>
</html>
