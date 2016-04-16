@extends('layout.masterlogin')

<!-- CUSTOM CSS UNTUK DOKUMEN -->
@section('css')
  <!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK DOKUMEN -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script type="text/javascript" src="{{ asset('public/js/login/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/login/shake.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/login/jquery-ui.js') }}"></script>
   
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) DOKUMEN -->


<!-- CUSTOM CONTENT UNTUK DOKUMEN -->
@section('login')
<div class="login-box" id="login">
  <!-- ISIKAN DISINI -->
  <div class="login-logo">
    <a href="#"><b>Admin</b> | PSDM UKDW</a>
  </div>
  <!-- /.login-logo -->
  <div id="login" class="login-box-body">
    <p class="login-box-msg">Login portal PSDM UKDW</p>

    <form action="#" method="post" id="login" name="login">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button id="login_button" type="submit" class="btn btn-primary btn-block btn-flat" value=" Login ">Sign In</button>
          
        </div>
        <div id="message"></div>
        <!-- /.col -->
      </div>
    </form>

    
    

    <a href="#">I forgot my password</a><br>
    

  </div>
</div>
  
@endsection