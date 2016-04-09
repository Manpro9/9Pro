<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSDM UKDW</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- css -->
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css' )}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('public/css/dist/AdminLTE.min.css' )}}">
  <link rel="stylesheet" href="{{ asset('public/css/dist/skins/_all-skins.min.css' )}}">
  @yield('css')
  


  <!-- JS -->

  <script src="{{ asset('public/js/plugin/jQuery/jQuery-2.2.0.min.js') }}"></script>
  
  <script src="{{ asset('public/js/plugin/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('public/js/plugin/fastclick/fastclick.js') }}"></script>
  
  <script src="{{ asset('public/js/dist/demo.js') }}"></script>
  @yield('js')


 
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  @include('layout.navbar')  
  @include('layout.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')    
  </div>
  <!-- /.content-wrapper -->

  @include('layout.footer')

  
</div>

<script src="{{ asset('public/js/dist/app.min.js') }}"></script>


</body>
</html>
