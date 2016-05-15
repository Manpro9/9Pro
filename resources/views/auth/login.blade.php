@extends('layout.masterlogin')

<!-- CUSTOM CSS UNTUK DOKUMEN -->
@section('css')
  <!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK DOKUMEN -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script type="text/javascript" src="{{ asset('public/js/login/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/login/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/login/shake.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) DOKUMEN -->


<!-- CUSTOM CONTENT UNTUK DOKUMEN -->
@section('login')
<div class="login-box" id="login">
  <!-- ISIKAN DISINI -->
  <div class="login-logo">
    <a href="{{ url('/') }}" class="logo"><b>Admin</b> | PSDM UKDW</a>
  </div>
  <!-- /.login-logo -->
  <div id="login" class="login-box-body">
    <p class="login-box-msg">Login portal PSDM UKDW</p>

    <form method="post" id="login" name="login" action="{{ url('/login') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group has-feedback">
        {!!Form::text('email', null, array('id' => 'email', 'class' => 'form-control {{ $errors->has("email") ? " has-error" : "" }}', 'placeholder' => 'Email', 'required'))!!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
        
      </div>
      <div class="form-group has-feedback">
        {!!Form::password('password', array('id' => 'password', 'class' => 'form-control {{ $errors->has("password") ? " has-error" : "" }}' ,'placeholder' => 'Password')) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
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
    <a href="{{ url('/') }}" class="logo">Kembali ke halaman utama</a>
  </div>
</div>
  
@endsection