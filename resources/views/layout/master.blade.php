<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{ asset('public/images/ukdw_icon.jpg') }}">

    <title>@yield('title')</title>

    <!-- CORE CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/layout/master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/layout/navbar-sidebar.css') }}">
    @yield('css')

    <!-- CORE Javascript / jQuery -->
    <script type="text/javascript" src="{{ asset('public/js/jquery-2.2.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>

    <!-- CUSTOM CSS -->
    <script type="text/javascript" src="{{ asset('public/js/layout/navbar-sidebar.js') }}"></script>
    @yield('scripts')
</head>

<body style="width:98,5%;">

    <!-- Navbar + Sidebar -->
    @include('layout.navbar-sidebar')

    <!-- Content -->
    <div id="container-fluid">
        @yield('content')
    </div>

    <!-- Untuk Javascript / jQuery yang letaknya di dalam tag "body" -->
    @yield('scriptsInsideBody')

    @include('layout.masterFooter')
</body>
</html>
