@extends('contoh.contoh_master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/contoh_css/contoh_content_css.css') }}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('public/js/contoh_js/contoh_content_js.js') }}"></script>
@endsection

@section('content')
    <div id="wrapper" style="left:0">
            <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                        <li>                
                            <div class="form-group has-feedback">
                                <input id="search" type="text" name="search" class="form-control" placeholder="Search. . ." />
                                <i class="glyphicon glyphicon-search form-control-feedback"></i>
                            </div>
                        </li>
                        <li class="active lists" id="all-game">
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-globe fa-stack-1x "></i></span>Contoh Sidebar 1</a>
                        </li>
                        <li class="lists">
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-ban fa-stack-1x "></i></span>Contoh Sidebar 2</a>
                        </li>
                        <li class="lists">
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-ban fa-stack-1x "></i></span>Contoh Sidebar 3</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-tags fa-stack-1x "></i></span>Contoh Dropdown 1</a>
                            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                                <li class="lists"><a href="#">1a</a></li>
                                <li class="lists"><a href="#">2a</a></li>
                                <li class="lists"><a href="#">3a</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-tags fa-stack-1x "></i></span>Contoh Dropdown 2</a>
                            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                                <li class="lists"><a href="#">1b</a></li>
                                <li class="lists"><a href="#">2b</a></li>
                                <li class="lists"><a href="#">3b</a></li>
                            </ul>
                        </li>
                        <br/>
                    </ul>
                </div>
                <!-- END OF SIDEBAR-->
         

        <!-- INCLUDED CONTENT -->
            @include('contoh.contoh_included_content')
        <!-- END OF INCLUDED CONTENT -->
    </div>

@endsection